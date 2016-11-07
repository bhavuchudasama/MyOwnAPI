<?php namespace App\Http\Controllers;

/**
* Controller created
*/
class MyController extends Controller
{
	
	public function index($name = 'user')
	{
		return view('hi', ['name' => $name]);
	}

	public function getRecord($id = '')
	{
		return view('getdata', ['id' => $id]);
	}
}