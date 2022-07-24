<?php


/**
 * 
 */
class Home extends Controller
{
	
	function index()
	{
		// $DB = new Database();
		// $data['result']     = $DB->read("select * from images");
		$data['page_title'] = "Home";

		$this->view("home",$data);
	}

}