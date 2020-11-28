<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
		} else {
			$page = 1;
		}
		$records_per_page = 10;
		$offset = ($page-1) * $records_per_page; 

		$total_pages_sql = "SELECT COUNT(*) AS TONG FROM product WHERE category_id = 1";
		$total_rows_result = $this->$db->query('SELECT COUNT(*) FROM product WHERE category_id = 1');
		$total_rows = $total_rows_result->getResult()[0];
		$total_pages = ceil($total_rows / $records_per_page);

		$sql = "SELECT * FROM product LIMIT $offset, $records_per_page";
		$query = $this->$db->query($sql);
		$result = $query->getResult();

		// $query = $this->$db->query('SELECT * FROM product LIMIT 30');
		// $results = $query->getResult();
		
		$data['title'] = 'Trang chủ';
		$data['res'] = $result;
		$data['page'] = $page;
		$data['total_pages'] = $total_pages;
		echo view('index', $data);
		
	}
	
	//--------------------------------------------------------------------

}
