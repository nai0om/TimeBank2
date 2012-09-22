<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller_Template {

	public function action_index()
	{
		$this->template->content = View::factory('news/index')
									->bind('news', $news);
		$news = ORM::factory('news')->order_by('timestamp','desc')->find_all();
		
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
	
	public function action_image()
	{
		$this->template->content = View::factory('viewimage')
										->bind('images', $images)
										->bind('first_page', $first_page);
		$news = ORM::factory('news', $this->request->param('id'));
		$images_news = $news->images->find_all();
		$images = array();
		$first_page = 1;
		$selected = Arr::get($_GET, 'index');
		$i = 0;
		foreach($images_news as $image)
		{
			if($image->image == $selected)
				$first_page = $i;
			$temp = array();
			$temp['image'] = 'media/upload/news/'.$image->image;
			$temp['id'] = $image->id;
			$temp['description'] = '';
			$temp['link'] = '';
			$images[] = $temp;
			$i++;
		}
		
		
	}
			
			
} // End Welcome
