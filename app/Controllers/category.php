<?php namespace App\Controllers;
class category extends BaseController
{
    public function index()
    {
        if (isset($_GET['cid'])) {
			$cid = $_GET['cid'];
		} else {
			$cid = 1;
        }
        if (isset($_GET['page'])) {
			$page = $_GET['page'];
		} else {
			$page = 1;
		}
		$records_per_page = 8;
        $offset = ($page-1) * $records_per_page; 
        

        $total_pages_sql = "SELECT COUNT(*) AS TONG FROM product WHERE category_id = $cid";
        $total_rows_result = $this->$db->query($total_pages_sql);
        $total_rows = $total_rows_result->getResult()[0]->TONG;
        $total_pages = ceil($total_rows / $records_per_page);


        $sql = "SELECT * FROM product WHERE category_id = $cid LIMIT $offset, $records_per_page";
        $result = $this->$db->query($sql);
        $product = $result->getResult();


        $data['total_pages'] = $total_pages;
        $data['page'] = $page;
        $data['cid'] = $cid;
        $data['products'] = $product;
        echo view('category', $data);
    }
}