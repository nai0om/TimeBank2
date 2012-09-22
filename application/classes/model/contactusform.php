<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Contactusform extends ORM {
	
    public function rules()
    {
        return array(
            'email' => array(
				array('not_empty'),
				array('email'),
                array('max_length', array(':value', 255)),
            ),
            'name' => array(
				array('not_empty'),
                array('max_length', array(':value', 255)),
            ),
            'surname' => array(
				array('not_empty'),
                array('max_length', array(':value', 255)),
            ),
            'phoneno' => array(
                array('max_length', array(':value', 255)),
            ),
            'topic' => array(
				array('not_empty'),
                array('max_length', array(':value', 255)),
            ),
            'message' => array(
				array('not_empty'),
            ),
        );
    }
} // End User Model