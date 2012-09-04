<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Company
 *
 * @author     Pongrob Saisuwan
 * @copyright  (c) 2011 Pongrob Saisuwan
 */
class Model_Organization extends ORM {

	// Relationships
	protected $_has_many = array(
		'events' => array('model' => 'event'),
	);

    public function rules()
    {
        return array(
            'user_id' => array(
                array('not_empty'),
                array('max_length', array(':value', 11)),
            ),
            'name' => array(
                array('not_empty'),
            ),
            'objective' => array(
                array('not_empty'),
				array('min_length', array(':value', 10)),
            ),
			'activity' => array(
                array('not_empty'),
            ),
			'address' => array(
                array('not_empty'),
            ),
			'province' => array(
                array('not_empty'),
            ),
			'postcode' => array(
                array('not_empty'),
            ),
			'district' => array(
                array('not_empty'),
            ),
			'fax' => array(
                array('not_empty'),
            ),
			'homephone' => array(
                array('not_empty'),
            ),
			'contactperson' => array(
                array('not_empty'),
            ), 
            'logo' => array(
                array(array($this, 'check_upload'), array('logo', ':value')),
            ),
			
        );
    }
	
	public function check_upload($filename)
    {
		if (isset($_FILES[$filename]) && $_FILES[$filename]['name'] != '')
		{
			// Validate the file first
			$validation = Validation::factory($_FILES)
					->rules($filename, array(
						array('not_empty'),
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
		{
			return TRUE;
		}
    }	
	
	public function upload($filename)
    {
		$picture = Upload::save($_FILES[$filename], NULL, Upload::$default_directory.'/organizations' );
		// Resize, sharpen, and save the image
		Image::factory($picture)
			->save();
		$this->logo = basename($picture);
    }	
	
} // End User Timebank Model