<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Emailcomingsoon extends ORM {
	
    public function rules()
    {
        return array(
            'email' => array(
				array('not_empty'),
				array(array($this, 'unique'), array('email', ':value')),
				array('email'),
                array('max_length', array(':value', 255)),
            ),
        );
    }
} // End User Model