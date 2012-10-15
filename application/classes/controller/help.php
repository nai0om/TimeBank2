<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Help extends Controller_Template {

	public function action_index()
	{
		$this->template->content = View::factory('help/index')
										->bind('helps', $helps);
		$helps = ORM::factory('help')->find_all();
	
   	}

			
} // End Welcome
