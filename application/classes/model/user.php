<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User extends ORM {

	protected $_has_many = array(
		'user_timebanks' => array('model' => 'user_timebank'),
		'user_tokens' => array('model' => 'user_token'),
		'comments' => array('model' => 'comment'),
		'roles'       => array('model' => 'role', 'through' => 'roles_users'),
		'locations'       => array('model' => 'location', 'through' => 'users_locations'),
		'events'		=> array('model' => 'event', 'through' => 'users_events'),
	);
	
	protected $_has_one = array(
		'company' => array('model' => 'company'),
	);
	
	public function filters()
	{
		return parent::filters() + array(
			'birthdate' => array(
				array('trim'),
			),
			'password' => array(
                array(array($this, 'hash_password')),
            ),
		);
	}
	
	public function rules()
    {
        return parent::rules() + array(
            'email' => array(
                array('not_empty'),
				array('email'),
				array('max_length', array(':value', 127)),
 				array(array($this, 'unique'), array('email', ':value')),
			),
            'birthdate' => array(
                array('date')
            ),
			'displayname' => array(
                array('min_length', array(':value', 3))
			),
			'first_name' => array(
                array('min_length', array(':value', 3))
			),
			'last_name' => array(
                array('min_length', array(':value', 3))
            ),
            'phone' => array(
                array('numeric')
            ),
            'profile_image' => array(
                array(array($this, 'check_upload'), array('profile_image', ':value')),
            ),
			'password' => array(
				array('not_empty'),
				array('min_length', array(':value', 6)),
				)
        );
    }
	
 	public function hash_password($password)
    {	
		if (strlen($password) <6) 
			return $password;
			
        return md5(Kohana::$config->load('timebank')->get('password_salt').$this->email.$password);
    }
	
	public function oldhash_password($password)
    {	
        return md5(Kohana::$config->load('timebank')->get('password_salt').$this->email.$password);
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
						array('Upload::size', array(':value', '1.5M')),
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
        $picture = Upload::save($_FILES[$filename], NULL, Upload::$default_directory.'/volunteers');
		// Resize, sharpen, and save the image
		Image::factory($picture)
			->save();
		$this->$filename = basename($picture);
    }
	
} // End User Model