<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Tag extends ORM {

	protected $_has_many = array(
		'users'     => array('model' => 'user', 'through' => 'users_tags'),
	);
	
    public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
            ),
        );
    }
} // End User Model