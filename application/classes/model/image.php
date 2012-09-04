<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Comment
 *
 * @author     Pongrob Saisuwan
 * @copyright  (c) 2012 Udomsak Donkhampai
 */
class Model_Image extends ORM {

	// Relationships
	protected $_belongs_to = array(
					'event' => array(),);

	public function rules()
    {
        return array(
            'image' => array(
                array(array($this, 'check_upload'), array('image', ':value')),
            ),
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
	
        $picture = Upload::save($_FILES[$filename], NULL, Upload::$default_directory.'/events' );
		// Resize, sharpen, and save the image
		Image::factory($picture)
			//->resize(460, NULL)
			->save();
		$this->$filename = basename($picture);
    }	

} // End Event Image Model