<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Knowledge extends ORM {
    public function rules()
    {
        return array(
            'title' => array(
				array('not_empty'),
				
            ),
            'content' => array(
				array('not_empty'),
            ),
        );
    }
	
	
} // End Knowledge Model