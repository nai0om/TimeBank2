<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Admin extends Controller_Template {

	public function action_index()
	{
		$this->check_admin();
		// show admin page
		$organizations = ORM::factory('organization')->where('verified', '=', 0)->find_all();
		$this->template->content = View::factory('admin/index')
											->bind('organizations', $organizations)
											->bind('event', $event)
											->bind('comments', $comments);
		
		
		$event = DB::select()->from('recommend_event')->execute()->as_array('id');
		$comments = DB::select()->from('users_comment_highlight')->execute()->as_array('id');
		
	}
	
	public function action_addrecommend()
	{
		$this->check_admin();		
        if (HTTP_Request::POST == $this->request->method()) 
        {           
			// delete all 
		 	DB::delete('recommend_event')->execute();
			
			for($i = 1 ; $i<=3 ; $i++)
			{
				DB::insert('recommend_event', array('id', 'event_id'))
				->values( array($i, Arr::get($_POST, $i)))
				->execute();
			}
		Request::current()->redirect('admin/index');
			
		}
	}
	
	public function action_addHighlighComment()
	{
		$this->check_admin();		
        if (HTTP_Request::POST == $this->request->method()) 
        {           
			// delete all 
		 	DB::delete('users_comment_highlight')->execute();
			
			for($i = 1 ; $i<=3 ; $i++)
			{
				DB::insert('users_comment_highlight', array('id', 'comment_id'))
				->values( array($i, Arr::get($_POST, $i)))
				->execute();
			}
		Request::current()->redirect('admin/index');
			
		}
	}
	
	public function action_approve()
	{
		$this->check_admin();
			
		$this->template->content = View::factory('admin/approve')
			->bind('message', $message);
			
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$organization = ORM::factory('organization', $this->request->post('organization_id'));
			if ($organization) 
            {
				$organization->verified = 1;
				
				try
				{
					$organization->save();
					$message = $organization->name.' has been verified';
				
				} catch (ORM_Validation_Exception $e) {
				
					// Set failure message
					$message = $e->getMessage();
					// Set errors using custom messages
					$errors = $e->errors('models');
				}
			}
			else
			{
				$message = 'Not found';
			}
			
		}
	}
	
	public function action_news()
	{
		$this->check_admin();
		
		$news = ORM::factory('news')->order_by('timestamp','desc')->find_all();
		$this->template->content = View::factory('admin/news')
											->bind('news', $news);
	}
	
	public function action_createnews()
	{
		$this->check_admin();
		$this->template->content = View::factory('admin/newscreate')
										->bind('news', $news)
										->bind('errors', $errors);
		$news = ORM::factory('news');
		$this->news_save($news, $errors, false);
	}
	
	public function action_editnews()
	{
		$this->check_admin();
	}
	
	public function action_deletenews()
	{
		$this->check_admin();
	}
	
	
	public function action_training()
	{
		$this->check_admin();
		$trainings = ORM::factory('training')->order_by('timestamp','desc')->find_all();
		$this->template->content = View::factory('admin/training')
											->bind('trainings', $trainings);
	}
	
	public function action_createtraining()
	{
		$this->check_admin();
		$this->template->content = View::factory('admin/trainingcreate')
										->bind('training', $training)
										->bind('errors', $errors);
		$training = ORM::factory('training');
		$this->training_save($training, $errors, false);
	}
	
	public function action_edittraining()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		
		$this->template->content = View::factory('admin/trainingedit')
										->bind('training', $training)
										->bind('errors', $errors);
		$training = ORM::factory('training', $this->request->param('id'));
		$this->training_save($training, $errors, true);
	}
	
	
	
	public function action_deletetraining()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');;
		
		$training = ORM::factory('training', $this->request->param('id') ); 
		$training->delete();	
		Request::current()->redirect('admin/training/');
	}
	
	public function action_trainingaddimage()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		
		$training = ORM::factory('training', $this->request->param('id')); 
		
		$training->save();			//loop for sub image
		$i = 0;
		while(isset($_FILES['sub_'.$i]['name']) && $_FILES['sub_'.$i]['name'] != '' )
		{	
			$image = ORM::factory('trainingimage');
			$image->training = $training;
			$image->image = $_FILES['sub_'.$i]['name'];
			try
			{
				$image->save();
								
			} catch (ORM_Validation_Exception $e) {
				 
				// Set errors using custom messages
				$errors = $e->errors('models');
			}
			$i++;
		}
		Request::current()->redirect('admin/edittraining/'.$this->request->param('id'));		
	}
	
	public function action_trainingdeleteimage()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');;
		
		$image = ORM::factory('trainingimage',  Arr::get($_GET, 'id')); 
		unlink(DOCROOT.'media/upload/training/'.$image->image);
		$image->delete();	
		//Request::current()->redirect('admin/edittraining/'.$this->request->param('id'));
	}
	
	private function training_save($training, &$errors, $isUpdate)
	{
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$training->topic = Arr::get($_POST, 'topic');
			$training->date_message = Arr::get($_POST, 'date_message');
			$training->message = Arr::get($_POST, 'message');
			$training->video = Arr::get($_POST, 'video');
			
			if (isset($_FILES['main_pic']['name']) && $_FILES['main_pic']['name'] != '')
			{
			
				$training->main_pic = $_FILES['main_pic']['name'];
			}
			
			if (isset($_FILES['thm_pic']['name']) && $_FILES['thm_pic']['name'] != '')
			{
				
				$training->thm_pic = $_FILES['thm_pic']['name'];
			}
			

			try{
			
				$training->save();			//loop for sub image
				$i = 0;
				while(isset($_FILES['sub_'.$i]['name']) && $_FILES['sub_'.$i]['name'] != '' )
				{	
					$image = ORM::factory('trainingimage');
					$image->training = $training;
					$image->image = $_FILES['sub_'.$i]['name'];
					try
					{
						$image->save();
										
					} catch (ORM_Validation_Exception $e) {
						 
						// Set errors using custom messages
						$errors = $e->errors('models');
					}
					$i++;
				}
				
				if($isUpdate)
				{
					Request::current()->redirect('admin/training/');
				}
				else
				{
					Request::current()->redirect('training/view/'.$training->id);
				}
				
			} catch (ORM_Validation_Exception $e) {
			
			// Set errors using custom messages
			$errors = $e->errors('models');
			
			
			}
		}
	}
	
	private function news_save($news, &$errors, $isUpdate)
	{
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$news->topic = Arr::get($_POST, 'topic');
			$news->message = Arr::get($_POST, 'message');
			$news->video = Arr::get($_POST, 'video');			
			if (isset($_FILES['pic']['name']) && $_FILES['pic']['name'] != '')
			{
			
				$news->pic = $_FILES['pic']['name'];
			}
			
			if (isset($_FILES['pic_thm']['name']) && $_FILES['pic_thm']['name'] != '')
			{
				
				$news->pic_thm = $_FILES['pic_thm']['name'];
			}
			

			try{
			
				$news->save();			//loop for sub image
				$i = 0;
				while(isset($_FILES['sub_'.$i]['name']) && $_FILES['sub_'.$i]['name'] != '' )
				{	
					$image = ORM::factory('newsimage');
					$image->news = $news;
					$image->image = $_FILES['sub_'.$i]['name'];
					try
					{
						$image->save();
										
					} catch (ORM_Validation_Exception $e) {
						 
						// Set errors using custom messages
						$errors = $e->errors('models');
					}
					$i++;
				}
				
				if($isUpdate)
				{
					Request::current()->redirect('admin/news/');
				}
				else
				{
					Request::current()->redirect('news/view/'.$news->id);
				}
				
			} catch (ORM_Validation_Exception $e) {
			
			// Set errors using custom messages
			$errors = $e->errors('models');
			
			
			}
		}
	}
	
	private function check_admin()
	{
		if ($this->user == null || $this->user->role != 2)
		{
			$this->redirect('/');
		}
	}
	
	private function redirect($path)
	{
		Request::current()->redirect($path);
		return;
	}
		
}