<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Admin extends Controller_Template {

	public function action_index()
	{
		$this->check_admin();
		// show admin page
		$this->template->content = View::factory('admin/index')
											->bind('organizations', $organizations)
											->bind('event_select', $event_select)
											->bind('event_recommend', $event_recommend)
											->bind('comments', $comments);
		
		
		$organizations = ORM::factory('organization')->where('verified', '=', 0)->find_all();
		
		$events = ORM::factory('event')->where('recommend', '=', '0')->order_by('id','desc')->find_all();
		$event_select = array();
		foreach($events as $event )
		{
			$name = $event->id.' - '.$event->name;
			$event_select[$event->id] = $name; 
		}
		
		$event_recommend = ORM::factory('event')->where('recommend', '=', '1')->order_by('id','desc')->find_all();
		
		$comments = DB::select()->from('users_comment_highlight')->execute()->as_array('id');
		
	}
	
	public function action_addrecommend()
	{
		$this->check_admin();		
        if (HTTP_Request::POST == $this->request->method()) 
        {           
			$event = ORM::factory('event', Arr::get($_POST, 'event_id'));
			
			$event->recommend = 1;
			try
			{
				$event->save();	
			} catch (ORM_Validation_Exception $e) {
			
			
				// Set errors using custom messages
				print_r($e->errors('models'));
			}
			Request::current()->redirect('admin/index');
			
		}
	}
	
	public function action_removerecommend()
	{
		$this->check_admin();		
			 
		$event = ORM::factory('event', $this->request->param('id'));
		
		$event->recommend = 0;
		try
		{
			$event->save();	
		} catch (ORM_Validation_Exception $e) {
		
		
			// Set errors using custom messages
			print_r($e->errors('models'));
		}
		Request::current()->redirect('admin/index');
	
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
	
//###########################################################		
//####################  valunteer control   #################
//###########################################################	
	// user config
	public function action_user()
	{
		$this->check_admin();
		// not need organization
		$users = ORM::factory('user')->where('role','<>','1')->order_by('id','desc')->find_all();
		$this->template->content = View::factory('admin/user/user')
											->bind('users', $users);
	}
	
	public function action_useredit()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		$this->template->content = View::factory('admin/user/useredit')
										->bind('valunteer', $valunteer)
										->bind('errors', $errors);
										
		$valunteer = ORM::factory('user', $this->request->param('id'));
		$this->user_save($valunteer, $errors);
		
	}
	
	// user record
	public function action_userrecord()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		// not need organization
		$records = DB::select()
				->from('user_timebanks') 	
				->where('user_id','=',$this->request->param('id'))
				->execute();
		$this->template->content = View::factory('admin/user/userrecord')
											->bind('records', $records);
	}
	
	public function action_userrecordedit()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		$this->template->content = View::factory('admin/user/userrecordedit')
										->bind('record', $record)
										->bind('errors', $errors);
										
		$record = DB::select()
				->from('user_timebanks') 	
				->where('id','=',$this->request->param('id'))
				->execute();
				
		$record = $record[0];
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			
			DB::update('user_timebanks')->set(
											array(	
													'hour' => Arr::get($_POST, 'hour'), 
													'description' => Arr::get($_POST, 'description'),
													))
							->where('id', '=',  $this->request->param('id')  )
							->order_by('timestamp','desc')
							->execute();
			Request::current()->redirect('admin/userrecord/'.$record['user_id']);
		}
	}
	// user event
	public function action_userevent()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		// not need organization
		$records = DB::select()
				->from('users_events') 	
				->where('user_id','=',$this->request->param('id'))
				->order_by('timestamp','desc')
				->execute();
				
		$this->template->content = View::factory('admin/user/userevent')
											->bind('records', $records);
		
	}
	
	public function action_usereventedit()
	{
		$this->check_admin();
		$this->template->content = View::factory('admin/user/usereventedit')
										->bind('record', $record)
										->bind('user_id', $user_id)
										->bind('event_id', $event_id)
										->bind('errors', $errors);
										
		if (HTTP_Request::GET == $this->request->method()){		
			$user_id= Arr::get($_GET, 'u');
			$event_id = Arr::get($_GET, 'e');
			//if ($user_id  == '' || $event_id == '')  $this->redirect('/');
			$record = DB::select()
					->from('users_events') 	
					->where('user_id','=', $user_id)
					->where('event_id','=', $event_id)
					->execute();
					
			$record = $record[0];
		}
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$user_id = Arr::get($_POST, 'user_id');
			$event_id = Arr::get($_POST, 'event_id');
			//if ($user_id  == '' || $event_id =='')  $this->redirect('/');
	
			DB::update('users_events')->set(
											array(	
													'status' => Arr::get($_POST, 'status'), 
													'time_approve' => Arr::get($_POST, 'time_approve'),
													))
							->where('user_id', '=',  $user_id )
							->where('event_id', '=', $event_id)
							->order_by('timestamp','desc')
							->execute();
			Request::current()->redirect('admin/userevent/'.$user_id);
		}
		
	
		
	}
	
	public function action_usereventremove()
	{
		$this->check_admin();
		
		if (HTTP_Request::GET == $this->request->method()){		
		$user_id= Arr::get($_GET, 'u');
		$event_id = Arr::get($_GET, 'e');
		DB::delete('users_events')->where('user_id', '=',  $user_id )
							->where('event_id', '=', $event_id)
							->execute();
		Request::current()->redirect('admin/userevent/'.$user_id);
		}
	}
	// user inbox
	public function action_userinbox()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
	
		// not need organization
		$inboxes = ORM::factory('inbox')->where('user_id','=', $this->request->param('id'))->order_by('created','desc')->find_all();
		
		$this->template->content = View::factory('admin/user/userinboxs')
											->bind('inboxes', $inboxes);
	}
	
	public function action_userinboxedit()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		$this->template->content = View::factory('admin/user/userinboxsedit')
										->bind('inbox', $inbox)
										->bind('errors', $errors);
										
		$inbox = ORM::factory('inbox', $this->request->param('id'));
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$inbox->is_removed = Arr::get($_POST, 'is_removed');
			$inbox->is_read = Arr::get($_POST, 'is_read');
			$inbox->title = Arr::get($_POST, 'title');
			$inbox->message = Arr::get($_POST, 'message');
			$inbox->send_status = Arr::get($_POST, 'send_status');
			try{
			
				$inbox->save();			//loop for sub image
			
			
				Request::current()->redirect('/admin/userinbox/'.$inbox->user_id);
			
				
			} catch (ORM_Validation_Exception $e) {
				// Set errors using custom messages
				$errors = $e->errors('models');
			}
		}

	}
	
//###########################################################		
//################  organization  control 	#################
//###########################################################
	public function action_organization()
	{
		$this->check_admin();
		
		$organizations = DB::select()->from('organizations')->order_by('id','desc')->execute()->as_array();

		$this->template->content = View::factory('admin/organization/organization')
											->bind('organizations', $organizations);
		for($i = 0 ; $i < count($organizations) ; $i++)
		{ 
			$organizations[$i]['email'] = ORM::factory('user', $organizations[$i]['user_id'])->email;
		}
	}
	
	public function action_organizationedit()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		$this->template->content = View::factory('admin/organization/organizationedit')
										->bind('organization', $organization)
										->bind('user_organization', $user_organization)
										->bind('errors', $errors);
										
						
		$organization = ORM::factory('organization', $this->request->param('id'));
		$user_organization = ORM::factory('user', $organization->user_id);
		$this->organization_save($organization, $user_organization, $errors);
	}
	
		
		// user inbox
	public function action_organizationinbox()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
	
		// not need organization
		$inboxes = ORM::factory('inbox')->where('organization_id','=', $this->request->param('id'))->order_by('created','desc')->find_all();
		
		$this->template->content = View::factory('admin/organization/organizationinbox')
											->bind('inboxes', $inboxes);
	}
	
	public function action_organizationinboxedit()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		$this->template->content = View::factory('admin/organization/organizationinboxedit')
										->bind('inbox', $inbox)
										->bind('errors', $errors);
										
		$inbox = ORM::factory('inbox', $this->request->param('id'));
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$inbox->is_removed = Arr::get($_POST, 'is_removed');
			$inbox->is_read = Arr::get($_POST, 'is_read');
			$inbox->title = Arr::get($_POST, 'title');
			$inbox->message = Arr::get($_POST, 'message');
			$inbox->send_status = Arr::get($_POST, 'send_status');
			try{
			
				$inbox->save();			//loop for sub image
			
				Request::current()->redirect('/admin/organizationinbox/'.$inbox->organization_id);
			
				
			} catch (ORM_Validation_Exception $e) {
				// Set errors using custom messages
				$errors = $e->errors('models');
			}
		}

	}	

//###########################################################		
//####################  events  control 	#################
//###########################################################	
	public function action_event()
	{
		
		$this->check_admin();
		
		$this->template->content = View::factory('admin/event/event')
											->bind('events', $events);
		$events = ORM::factory('event');
		if (HTTP_Request::GET == $this->request->method()) 
		{
			if(trim(Arr::get($_GET, 'org') != '')) 
				$events = $events->where('organization_id', '=', trim(Arr::get($_GET, 'org')));
		}
		
		$events = $events->order_by('id','desc')->find_all();
	}
	
	public function action_eventedit()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		$this->template->content = View::factory('admin/event/eventedit')
										->bind('event', $event)
										->bind('errors', $errors);
										
		$event = ORM::factory('event', $this->request->param('id'));
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$event->status = Arr::get($_POST, 'status');
			$event->message = Arr::get($_POST, 'message');
			$event->volunteer_joined = Arr::get($_POST, 'volunteer_joined');
			Controller_Event::save_event($event, NULL, $this->request->method(), true, $message, $errors);
		}
		print_r($errors);
	}
	
	public function action_eventuser()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		// not need organization
		$records = DB::select()
				->from('users_events') 	
				->where('event_id','=',$this->request->param('id'))
				->order_by('timestamp','desc')
				->execute();
				
		$this->template->content = View::factory('admin/event/eventuser')
											->bind('records', $records);
	}
	
	public function action_eventuseredit()
	{
		$this->check_admin();
		$this->template->content = View::factory('admin/event/eventuseredit')
										->bind('record', $record)
										->bind('user_id', $user_id)
										->bind('event_id', $event_id)
										->bind('errors', $errors);
										
		if (HTTP_Request::GET == $this->request->method()){		
			$user_id= Arr::get($_GET, 'u');
			$event_id = Arr::get($_GET, 'e');
			//if ($user_id  == '' || $event_id == '')  $this->redirect('/');
			$record = DB::select()
					->from('users_events') 	
					->where('user_id','=', $user_id)
					->where('event_id','=', $event_id)
					->execute();
					
			$record = $record[0];
		}
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$user_id = Arr::get($_POST, 'user_id');
			$event_id = Arr::get($_POST, 'event_id');
			//if ($user_id  == '' || $event_id =='')  $this->redirect('/');
	
			DB::update('users_events')->set(
											array(	
													'status' => Arr::get($_POST, 'status'), 
													'time_approve' => Arr::get($_POST, 'time_approve'),
													))
							->where('user_id', '=',  $user_id )
							->where('event_id', '=', $event_id)
							->order_by('timestamp','desc')
							->execute();
			Request::current()->redirect('admin/eventuser/'.$event_id);
		}
	}
	
	public function action_eventuserremove()
	{
		$this->check_admin();
		
		if (HTTP_Request::GET == $this->request->method()){		
		$user_id= Arr::get($_GET, 'u');
		$event_id = Arr::get($_GET, 'e');
		DB::delete('users_events')->where('user_id', '=',  $user_id )
							->where('event_id', '=', $event_id)
							->execute();
		Request::current()->redirect('admin/userevent/'.$user_id);
		}
	}
	
	public function action_eventimage()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		
		$event = ORM::factory('event', $this->request->param('id'));
		$images = $event->images;
		$this->template->content = View::factory('admin/event/eventimage')
											->bind('images', $images);
	}
	
	public function action_eventimageedit()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		$this->template->content = View::factory('admin/event/eventimageedit')
										->bind('image', $image)
										->bind('errors', $errors);
										
		$image = ORM::factory('image', $this->request->param('id'));
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$image->description = Arr::get($_POST, 'description');
			$image->highlight = Arr::get($_POST, 'highlight');
			if (isset($_FILES['pic_thm']['name']) && $_FILES['pic_thm']['name'] != '')
			{
				
				$image->image = $_FILES['image']['name'];
			}
			try{
			
				$image->save();			
			
			
				Request::current()->redirect('/admin/eventimage/'.$image->event_id);
			
				
			} catch (ORM_Validation_Exception $e) {
				// Set errors using custom messages
				$errors = $e->errors('models');
				print_r($e);
			}
		}
	}
	public function action_eventaddimage()
	{
		
	}
	
	public function action_eventimagedelete()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		$image = ORM::factory('image', $this->request->param('id'));
		$event_id = $image->event_id;
		try
		{
			unlink(DOCROOT.'media/upload/event/'.$image->image);
		} catch(ErrorException  $e)
		{
			
		}
		$image->delete();
		Request::current()->redirect('/admin/eventimage/'.$event_id);
	}
	
	public function action_eventcomment()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		
		$event = ORM::factory('event', $this->request->param('id'));
		$comments = $event->comments;
		$this->template->content = View::factory('admin/event/eventcomment')
											->bind('comments', $comments);	
	}
	
	public function action_eventcommentedit()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		$this->template->content = View::factory('admin/event/eventcommentedit')
										->bind('comment', $comment)
										->bind('errors', $errors);
										
		$comment = ORM::factory('comment', $this->request->param('id'));
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$comment->comment = Arr::get($_POST, 'comment');
		
			try{
			
				$comment->save();			
				Request::current()->redirect('/admin/eventcomment/'.$comment->event_id);
				
			} catch (ORM_Validation_Exception $e) {
				// Set errors using custom messages
				$errors = $e->errors('models');
				print_r($e);
			}
		}
	}
	
	public function action_eventcommentdelete()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		$comment = ORM::factory('comment', $this->request->param('id'));
		$event_id = $comment->event_id;
		$comment->delete();
		Request::current()->redirect('/admin/eventcomment/'.$event_id);
		
	}

	
//###########################################################		
//####################  knowledge  control ##################
//###########################################################	
	public function action_knowledge()
	{
		$this->check_admin();
		
		$knowledges = ORM::factory('knowledge')->order_by('timestamp','desc')->find_all();
		$this->template->content = View::factory('admin/knowledge/knowledge')
											->bind('knowledges', $knowledges);
	}
	
	public function action_createknowledge()
	{
		$this->check_admin();
		$this->template->content = View::factory('admin/knowledge/knowledgecreate')
										->bind('knowledge', $knowledge)
										->bind('errors', $errors);
		$knowledge = ORM::factory('knowledge');
		$this->knowledge_save($knowledge, $errors, false);
	}
	
	public function action_editknowledge()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		$this->template->content = View::factory('admin/knowledge/knowledgeedit')
										->bind('knowledge', $knowledge)
										->bind('errors', $errors);
										
		$knowledge = ORM::factory('knowledge', $this->request->param('id'));
		$this->knowledge_save($knowledge, $errors, true);
	}
	
	public function action_deleteknowledge()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');;
		
		$knowledge = ORM::factory('knowledge', $this->request->param('id') ); 
		$knowledge->delete();	
		Request::current()->redirect('admin/knowledge/knowledge/');
	}
	
	
//###########################################################		
//####################  news  control 		#################
//###########################################################	
	public function action_news()
	{
		$this->check_admin();
		
		$news = ORM::factory('news')->order_by('timestamp','desc')->find_all();
		$this->template->content = View::factory('admin/news/news')
											->bind('news', $news);
	}
	
	public function action_createnews()
	{
		$this->check_admin();
		$this->template->content = View::factory('admin/news/newscreate')
										->bind('news', $news)
										->bind('errors', $errors);
		$news = ORM::factory('news');
		$this->news_save($news, $errors, false);
	}
	
	public function action_editnews()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		$this->template->content = View::factory('admin/news/newsedit')
										->bind('news', $news)
										->bind('errors', $errors);
										
		$news = ORM::factory('news', $this->request->param('id'));
		$this->news_save($news, $errors, true);

	}
	
	public function action_deletenews()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');;
		
		$news = ORM::factory('news', $this->request->param('id') ); 
		$news->delete();	
		Request::current()->redirect('admin/news/news/');
	}
	
	public function action_newsaddimage()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		
		$news = ORM::factory('news', $this->request->param('id')); 
		$news->save();
		//loop for sub image
		$i = 0;
		while(isset($_FILES['sub_'.$i]['name']) && $_FILES['sub_'.$i]['name'] != '' )
		{	
			$image = ORM::factory('newsimage');
			$image->news = $news;
			echo $_FILES['sub_'.$i]['name'];
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
		Request::current()->redirect('admin/editnews/'.$this->request->param('id').'#subimage');		
	}
	
	public function action_newsdeleteimage()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');;
		
		$image = ORM::factory('newsimage',  Arr::get($_GET, 'id')); 
		try
		{
			unlink(DOCROOT.'media/upload/news/'.$image->image);
		} catch(ErrorException  $e)
		{
			
		}
		$image->delete();	
		Request::current()->redirect('admin/editnews/'.$this->request->param('id')).'#subimage';
	}

//###########################################################		
//####################  training  control  ##################
//###########################################################	

	public function action_training()
	{
		$this->check_admin();
		$trainings = ORM::factory('training')->order_by('timestamp','desc')->find_all();
		$this->template->content = View::factory('admin/training/training')
											->bind('trainings', $trainings);
	}
	
	public function action_createtraining()
	{
		$this->check_admin();
		$this->template->content = View::factory('admin/training/trainingcreate')
										->bind('training', $training)
										->bind('errors', $errors);
		$training = ORM::factory('training');
		$this->training_save($training, $errors, false);
	}
	
	public function action_edittraining()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');
		
		$this->template->content = View::factory('admin/training/trainingedit')
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
		$training->save();
		//loop for sub image
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
		Request::current()->redirect('admin/edittraining/'.$this->request->param('id').'#subimage');		
	}
	
	public function action_trainingdeleteimage()
	{
		$this->check_admin();
		if ($this->request->param('id')  == '') $this->redirect('/');;
		
		$image = ORM::factory('trainingimage',  Arr::get($_GET, 'id')); 
		try
		{
			unlink(DOCROOT.'media/upload/training/'.$image->image);
		} catch(ErrorException  $e)
		{
			print_r($e);
		}
		$image->delete();	
		Request::current()->redirect('admin/edittraining/'.$this->request->param('id').'#subimage');
	}
	
	
//###########################################################		
//####################  private   function ##################
//###########################################################	
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
	
	
	private function knowledge_save($knowledge, &$errors, $isUpdate)
	{
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$knowledge->title = Arr::get($_POST, 'title');
			$knowledge->content = Arr::get($_POST, 'content');

			try{
			
				$knowledge->save();			//loop for sub image
			
				if($isUpdate)
				{
					Request::current()->redirect('admin/knowledge/');
				}
				else
				{
					Request::current()->redirect('/training/download');
				}
				
			} catch (ORM_Validation_Exception $e) {
				// Set errors using custom messages
				$errors = $e->errors('models');
			}
		}
	}
	
	private function user_save($valunteer, &$errors)
	{
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$valunteer->email = Arr::get($_POST, 'email');
			$valunteer->displayname = Arr::get($_POST, 'displayname');
			$valunteer->noti_eventrecommended = Arr::get($_POST, 'noti_eventrecommended');
			$valunteer->noti_eventapproved = Arr::get($_POST, 'noti_eventapproved');
			$valunteer->noti_almosteventdate = Arr::get($_POST, 'noti_almosteventdate');
			$valunteer->noti_eventthank = Arr::get($_POST, 'noti_eventthank');
			$valunteer->noti_sms_eventapproved = Arr::get($_POST, 'noti_sms_eventapproved');
			$valunteer->noti_sms_almosteventdate = Arr::get($_POST, 'noti_sms_almosteventdate');
			$valunteer->noti_sms_news = Arr::get($_POST, 'noti_sms_news');
			$valunteer->nickname = Arr::get($_POST, 'nickname');
			$valunteer->role = Arr::get($_POST, 'role');
			$valunteer->first_name = Arr::get($_POST, 'first_name');
			$valunteer->last_name = Arr::get($_POST, 'last_name');
			$valunteer->birthday = Arr::get($_POST, 'birthday');
			$valunteer->phone = Arr::get($_POST, 'phone');
			$valunteer->address = Arr::get($_POST, 'address');
			$valunteer->profile_image = Arr::get($_POST, 'profile_image');
			$valunteer->quote = Arr::get($_POST, 'quote');
			$valunteer->description = Arr::get($_POST, 'description');
			$valunteer->sex = Arr::get($_POST, 'sex');
			$valunteer->website = Arr::get($_POST, 'website');
			$valunteer->skills = Arr::get($_POST, 'skills');

			try{
			
				$valunteer->save();			//loop for sub image
			
			
					Request::current()->redirect('/user/view/'.$valunteer->id);
			
				
			} catch (ORM_Validation_Exception $e) {
				// Set errors using custom messages
				$errors = $e->errors('models');
			}
		}
	}
	
	private function organization_save($org, $usr_org, &$errors)
	{
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			if(Arr::get($_POST, 'email') != '')
			{
	
				$usr_org->email = Arr::get($_POST, 'email');
				
				try 
				{
					$usr_org->save();
				} catch (ORM_Validateion_Exeception $e){
					$errors = $e->errors('models');
				}
			}
			
			$org->name = Arr::get($_POST, 'name');
			$org->objective = Arr::get($_POST, 'objective');
			$org->activity = Arr::get($_POST, 'activity');
			$org->address = Arr::get($_POST, 'address');
			$org->province = Arr::get($_POST, 'province');
			$org->postcode = Arr::get($_POST, 'postcode');
			$org->district = Arr::get($_POST, 'district');
			$org->fax = Arr::get($_POST, 'fax');
			$org->homephone = Arr::get($_POST, 'homephone');			
			$org->contactperson = Arr::get($_POST, 'contactperson');			
			$org->facebook = Arr::get($_POST, 'facebook');			
			$org->twitter = str_replace('@', '', Arr::get($_POST, 'twitter'));	
			$org->website = Arr::get($_POST, 'website');				
			$org->noti_volunteerregister =  Arr::get($_POST, 'noti_volunteerregister');
			$org->noti_eventend =  Arr::get($_POST, 'noti_eventend');
			$org->noti_eventalmostend =  Arr::get($_POST, 'noti_eventalmostend');
			
			if (isset($_FILES['logo']['name']) && $_FILES['logo']['name'] != '')
			{
				$org->logo = $_FILES['logo']['name'];
			}
			
			try
			{
				$org->save();
                 
				Request::current()->redirect('admin/organization');
				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = __('There were errors, please see form below.');
                
                // Set errors using custom messages
                $errors = $e->errors('models');
				//print_r($errors);
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