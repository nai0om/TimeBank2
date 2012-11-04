<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Event
 *
 * @author     Pongrob Saisuwan
 * @copyright  (c) 2012 Pongrob Saisuwan
 */
class Model_Event extends ORM {

	// Relationships
	protected $_belongs_to = array(
					'organization' => array(),
					'location' => array(),);
	protected $_has_many = array(
		'users'		=> array('model' => 'user', 'through' => 'users_events'),
		'comments'	=> array('model' => 'comment'),
		'images'	=> array('model' => 'image'),
	);

	public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
                array('min_length', array(':value', 3)),
            ),
			/*
            'signup_begin_date' => array(
                array('not_empty'),
                array('date'),
            ),
			*/
            'signup_end_date' => array(
                array('not_empty'),
                array('date'),
            ),
            'volunteer_begin_date' => array(
                array('not_empty'),
                array('date'),
            ),
            'volunteer_end_date' => array(
                array('not_empty'),
                array('date'),
            ),
            'organization_id' => array(
                array('not_empty'),
                array('max_length', array(':value', 11)),
            ),
			/*
            'location_id' => array(
                array('not_empty'),
                array('max_length', array(':value', 11)),
            ),
			
            'status' => array(
                array('not_empty'),
            ),
            'phone' => array(
                array('not_empty'),
				array('numeric'),
            ),
            'contractor_name' => array(
                array('not_empty'),
            ),
			*/
            'volunteer_need_count' => array(
                array('not_empty'),
                array('digit'),
				 array('range', array(':value', 1, 1000)),
            ),
			/*
            'time_cost' => array(
                array('not_empty'),
                array('digit'),
                array('max_length', array(':value', 3)),
            ),*/
			
            'location_name' => array(
                array('not_empty'),
            ),
            'location_province' => array(
                array('not_empty'),
            ),
            'location_district' => array(
                array('not_empty'),
            ),
            'location_postcode' => array(
                array('not_empty'),
                array('digit'),
				array('min_length', array(':value', 5)),
				array('max_length', array(':value', 5)),
            ),
            'detail' => array(
                array('not_empty'),
                array('min_length', array(':value', 10)),
            ),
            'travel_detail' => array(
                array('min_length', array(':value', 10)),
            ),
			'inquiry_detail' => array(
                array('not_empty'),
				array('min_length', array(':value', 10)),
            ),	
            'is_need_expense' => array(
                array('not_empty'),
                array('digit'),
            ),
            'expense_detail' => array(
				array('min_length', array(':value', 10)),
            ),
			/*
			'temp' => array(
                array('not_empty'),
            ),
			*/
            'image' => array(
				array('not_empty'),
                array(array($this, 'check_upload'), array('image', ':value')),
            )
        );
    }

	public function filters()
	{
		return array(
		/*
			'signup_begin_date' => array(
				array('trim'),
			),
			*/
			'signup_end_date' => array(
				array('trim'),
			),
			'volunteer_begin_date' => array(
				array('trim'),
			),
			'volunteer_end_date' => array(
				array('trim'),
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
			->resize(460, NULL)
			->save();
		$this->$filename = basename($picture);
    }	

} // End User Timebank Model