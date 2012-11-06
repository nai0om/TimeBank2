<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Template extends Kohana_Controller_Template {

	public $user;
	public $orguser;
	public $meta_page_title;
	public $notification_count;
	
	/**
	 * Loads the template [View] object.
	 */
	public function before()
	{
		parent::before();

		if ($this->auto_render === TRUE)
		{
			$this->template->bind('user', $this->user);
			$this->template->bind('orguser', $this->orguser);
			$this->template->bind('notification_count', $this->notification_count);

			$this->user = Controller_User::get_logged_in_user();

			$user_roles = Kohana::$config->load('timebank')->get('user_roles');

			if (!is_null($this->user))
			{
				if ($this->user->role == $user_roles['organization']) // Is this a organization account?
				{
					// Find organization that belong to this user
					$organization = ORM::factory('organization')
								->where('user_id', '=', $this->user->id)
								->find();
					
					if ($organization->loaded())
					{
						$this->orguser = $organization;
											
						// Disable user account, only one type of user is valid in the system
						$this->user = NULL;
						
						// Get inbox count
						$query = DB::select(array('COUNT("id")', 'notification_count'))
												->from('inboxes')
												->where('organization_id', '=', $this->orguser->id)
												->and_where('is_read', '=', 0);
						$result = $query->execute();
						$this->notification_count = $result[0]['notification_count'];
					}
					else
					{
						$this->orguser = NULL;	
					}
				}
				else
				{
					// Get inbox count for user
					$query = DB::select(array('COUNT("id")', 'notification_count'))
											->from('inboxes')
											->where('user_id', '=', $this->user->id)
											->and_where('is_read', '=', 0);
					$result = $query->execute();
					$this->notification_count = $result[0]['notification_count'];
				}
			}


			$this->template->bind('meta_page_title', $this->meta_page_title);
		}
	}

	/**
	 * Assigns the template [View] as the request response.
	 */
	public function after()
	{
		if ($this->auto_render === TRUE)
		{
			if (isset($this->template->content))
			{
				$this->template->content->bind('user', $this->user);
				$this->template->content->bind('orguser', $this->orguser);
				$this->template->content->bind('notification_count', $this->notification_count);
			}
		}

		parent::after();
	}

} // End Controller_Template
