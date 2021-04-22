<?php

namespace App\Controllers;

use App\Models\bannerModel;
use App\Models\categoryModel;
use App\Models\commentModel;
use App\Models\ProductModel;
use App\Models\supplierModel;

class Home extends BaseController
{
	public function index()
	{
		$categoryModel = new categoryModel();
		$bannerModel = new bannerModel();
		$commentModel = new commentModel();
		$productModel = new ProductModel();
		$supplierModel = new supplierModel();
		$data['suppliers'] = $supplierModel->getAllSupplier();
		$data['newsProduct'] = $productModel->getNewsProduct(12, 0);
		$data['hotProduct'] = $productModel->getHotProduct(12, 0);
		$data['comment'] = $commentModel->getAllComment();
		$data['banner'] = $bannerModel->getAllBanner();
		$data['category'] = $categoryModel->getAllCategory();
		$data['title'] = 'Trang chủ';
		echo view('index', $data);
	}

	//--------------------------------------------------------------------

}
