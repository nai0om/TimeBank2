<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller_Template {

	public function action_index()
	{
		$this->template->content = View::factory('news/index');
   	}

	public function action_view()
	{
        $this->template->content = View::factory('news/view')
            ->bind('news', $news);
            //->bind('locations', $locations);
		
		$news = ORM::factory('news', $this->request->param('id'));

		if (!$news->loaded())
		{
			throw new HTTP_Exception_404(__('News id :id not found', array(':id' => $this->request->param('id'))));
		}
	}
			
} // End Welcome
