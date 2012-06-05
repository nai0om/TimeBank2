<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Help extends ORM {
	
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
        );
    }
} // End User Model