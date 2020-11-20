<?php namespace App\Controllers;
class contact extends BaseController
{
	public function index()
	{
		$data['title'] = 'Liên hệ';
		echo view('contact', $data);
    }
	
	//--------------------------------------------------------------------

}

