<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tag extends Controller_Template {

	public function action_get()
	{
		$this->auto_render = false;
		$tags = ORM::factory('tag')->where('name', 'like', '%'.Arr::get($_GET, 'q').'%')->limit(10)->find_all();
		
		$arr = array();
		$i = 1;
		$is_match = false;
		foreach($tags as $tag){
			if($tag->name == Arr::get($_GET, 'q'))
			{
				$is_match = true;
				break;
			}
			
		}
		
		if(count($tags) <= 0 || !$is_match )
		{	
			$temp = array();
			$temp['id'] = Arr::get($_GET, 'q');
			$temp['name'] = ' [เพิ่ม] - '.Arr::get($_GET, 'q');
			$arr[] = $temp;
		}
		
		foreach($tags as $tag){
		$temp = array();
		$temp['id'] = $tag->id;
		$temp['name'] = $tag->name;
		if($tag->name == Arr::get($_GET, 'q'))
		{
			$is_match = true;
		}
		$arr[] = $temp;
		
		}
		# JSON-encode the response
		$json_response = json_encode($arr);
		
		/*
		# Optionally: Wrap the response in a callback function for JSONP cross-domain support
		if($_GET["callback"]) {
			$json_response = $_GET["callback"] . "(" . $json_response . ")";
		}*/
		
		# Return the response
		echo $json_response;

   	}

			
} // End Welcome
