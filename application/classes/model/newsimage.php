<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Comment
 *
 * @author     Pongrob Saisuwan
 * @copyright  (c) 2012 Udomsak Donkhampai
 */
class Model_Newsimage extends ORM {

	// Relationships
	protected $_belongs_to = array(
					'news' => array(),);

	public function rules()
    {
        return array(
            'image' => array(
                array(array($this, 'check_upload'), array(':value')),
            ),
        );
    }
	
	public function check_upload($filename)
    {
		
		foreach ($_FILES as $key => $value )
		{
			if($value['name'] == $filename)
			{
				$field = $key;
				break;
			}

		}
		if (isset($filename) && $field != '')
		{
			// Validate the file first
			$validation = Validation::factory($_FILES)
					->rules($field, array(
    	                array('Upload::not_empty'),
						array('Upload::valid'),
						array('Upload::type', array(':value', array('gif', 'jpg', 'png', 'jpeg'))),
						array('Upload::size', array(':value', '4M')),
					));
	
			// Validate and upload OK
			if ($validation->check())
			{
				$this->upload($filename , $field);
				
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
	
	public function upload($filename ,$field)
    {
	
        $picture = Upload::save($_FILES[$field], NULL, Upload::$default_directory.'/news' );
		// Resize, sharpen, and save the image
		Image::factory($picture)
			->resize(460, NULL)
			->save();
		$this->image = basename($picture);
    }	

} // End Event Image Model