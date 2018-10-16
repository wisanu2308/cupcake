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

		return view('igapi');
	}

	function hashtag(){

		return view('igapi-hashtag');
	}
}

 ?>