<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Training extends Controller_Template {

	public function action_index()
	{
		$trainings = ORM::factory('training')->order_by('timestamp','desc')->find_all();
		$this->template->content = View::factory('training/index')->bind('trainings', $trainings);
   	}

	public function action_download()
	{
		$knowledges = ORM::factory('knowledge')->order_by('timestamp','desc')->find_all();
		$this->template->content = View::factory('training/download')
											->bind('knowledges', $knowledges);
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
	
	public function action_image()
	{
		$this->template->content = View::factory('viewimage')
										->bind('images', $images)
										->bind('first_page', $first_page);
		$training = ORM::factory('training', $this->request->param('id'));
		$images_trainning = $training->images->find_all();
		$images = array();
		$first_page = 1;
		$selected = Arr::get($_GET, 'index');
		$i = 0;
		foreach($images_trainning as $image)
		{
			if($image->image == $selected)
				$first_page = $i;
			$temp = array();
			$temp['image'] = 'media/upload/training/'.$image->image;
			$temp['id'] = $image->id;
			$temp['description'] = '';
			$temp['link'] = '';
			$images[] = $temp;
			$i++;
		}
		
		
	}
			
} // End Welcome
