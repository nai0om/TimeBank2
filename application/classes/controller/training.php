<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Training extends Controller_Template {

	public function action_index()
	{
		$trainings = ORM::factory('training')->order_by('timestamp','desc')->find_all();
		$this->template->content = View::factory('training/index')->bind('trainings', $trainings);
   	}

	public function action_download()
	{
		$this->template->content = View::factory('training/download');
   	}

	public function action_view()
	{
        $this->template->content = View::factory('training/view')
            ->bind('training', $training);
            //->bind('locations', $locations);
		
		$training = ORM::factory('training', $this->request->param('id'));

		if (!$training->loaded())
		{
			throw new HTTP_Exception_404(__('Training id :id not found', array(':id' => $this->request->param('id'))));
		}
	}
			
} // End Welcome
