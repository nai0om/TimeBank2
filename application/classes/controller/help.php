<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Help extends Controller_Template {

	public function action_index()
	{
		$this->template->content = View::factory('help/index');
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
