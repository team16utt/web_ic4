<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$db = \Config\Database::connect();
		$query = $db->query('SELECT * FROM category');
		$results = $query->getResult();
		
		$data['title'] = 'Trang chủ';
		$data['res'] = $results;
		echo view('index', $data);
		
	}
	
	//--------------------------------------------------------------------

}
