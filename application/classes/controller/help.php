<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Help extends Controller_Template {

	public function action_index()
	{
		$this->template->content = View::factory('help/index')
										->bind('helps_left', $helps_left)
										->bind('helps_right', $helps_right);
		$helps = ORM::factory('help')->find_all();
		$helps_left = array();
		$helps_right = array();
		$split_index = count($helps)/2;
		$i = 0;
		foreach($helps as $help) 
		{
			if($i >= $split_index)
			{
				
				$helps_right[] = $help;
			}
			else
			{
				$helps_left[] = $help;
			}
			
			$i++;
		}
   	}

	public function action_view()
	{
        $this->template->content = View::factory('help/view')
            ->bind('help', $help);
            //->bind('locations', $locations);
		
		$help = ORM::factory('help', $this->request->param('id'));

		if (!$help->loaded())
		{
			throw new HTTP_Exception_404(__('Help id :id not found', array(':id' => $this->request->param('id'))));
		}
	}
			
} // End Welcome
