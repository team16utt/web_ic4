<?php namespace App\Controllers;
class about extends BaseController
{
	public function index()
	{
		$db = db_connect();
		$query   = $db->query('SELECT * FROM about');
		$results = $query->getResultArray();
		$data['content'] = $results;
		$query_admin = $db->query('Select * from users where role_id = 1');
		$results_admin = $query_admin->getResultArray();
		$data['admin'] = $results_admin;
		$data['title'] = 'About';
		echo view('about', $data);
    }
	
	//--------------------------------------------------------------------

}
