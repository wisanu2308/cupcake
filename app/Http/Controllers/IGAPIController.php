<?php 

namespace App\Http\Controllers;

/**
 * 
 */
class IGAPIController
{
	
	function __construct()
	{
		# code...
	}

	function index(){

		return view('ig_page.igapi');
	}

	function hashtag(){

		return view('ig_page.igapi-hashtag');
	}
}

 ?>