<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

	public function action_index()
	{
		$this->template->content = View::factory('welcome');
   	}
	
	public function action_timebank()
	{
		$this->template->content = View::factory('timebank');
   	}
	
	public function action_timebankhow()
	{
		$this->template->content = View::factory('timebankhow');
   	}
	
	public function action_donation()
	{
		$this->template->content = View::factory('donation');
   	}
	
	public function action_aboutus()
	{
		$this->template->content = View::factory('aboutus');
   	}
	
	public function action_training()
	{
		$this->template->content = View::factory('training');
   	}
	
	public function action_news()
	{
		$this->template->content = View::factory('news');
   	}
	
} // End Welcome
