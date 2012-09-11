<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Training extends ORM {
	protected $_has_many = array(
		'images'	=> array('model' => 'trainingimage'),
	);

    public function rules()
    {
        return array(
            'topic' => array(
				array('not_empty'),
                array('max_length', array(':value', 255)),
            ),
            'message' => array(
				array('not_empty'),
            ),
			  'main_pic' => array(
				array('not_empty'),
                array(array($this, 'check_upload'), array('main_pic', ':value')),
            ),
			  'thm_pic' => array(
				array('not_empty'),
                array(array($this, 'check_upload'), array('thm_pic', ':value')),
            )
        );
    }

	public function check_upload($filename)
    {
		
		if (isset($_FILES[$filename]['name']) && $_FILES[$filename]['name'] != '')
		{
			// Validate the file first
			$validation = Validation::factory($_FILES)
					->rules($filename, array(
    	                array('Upload::not_empty'),
						array('Upload::valid'),
						array('Upload::type', array(':value', array('gif', 'jpg', 'png', 'jpeg'))),
						array('Upload::size', array(':value', '4M')),
					));
	
			// Validate and upload OK
			if ($validation->check())
			{
				$this->upload($filename);
				
				return TRUE;
			}
			else
			{
				//print_r($validation->errors('upload'));
				return FALSE;
			}
		}
		else
			return TRUE;
    }	
	
	public function upload($filename)
    {
        $picture = Upload::save($_FILES[$filename],  $_FILES[$filename]['name'] , Upload::$default_directory.'/training' );
		// Resize, sharpen, and save the image
		Image::factory($picture)
			->resize(460, NULL)
			->save();
		$this->$filename = basename($picture);
    }	
} // End User Model