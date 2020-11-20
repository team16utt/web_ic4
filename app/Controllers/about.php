<?php namespace App\Controllers;
class about extends BaseController
{
	public function index()
	{
		$data['title'] = 'Giới thiệu';
		echo view('about', $data);
    }
	
	//--------------------------------------------------------------------

}
