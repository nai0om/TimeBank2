<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tag extends Controller_Template {

	public function action_get()
	{
		$this->auto_render = false;
		$tags = ORM::factory('tag')->where('name', 'like', '%'.Arr::get($_GET, 'q').'%')->limit(10)->find_all();
		
		$arr = array();
		foreach($tags as $tag){
			$temp = array();
			$temp['id'] = $tag->id;
			$temp['name'] = $tag->name;
			$arr[] = $temp;
			}
		if(count($arr) <= 0 )
		{
			$temp = array();
			$temp['id'] = Arr::get($_GET, 'q');
			$temp['name'] = ' [เพิ่ม] - '.Arr::get($_GET, 'q');
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
