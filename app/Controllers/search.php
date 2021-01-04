<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Search extends BaseController
{
    public function index()
    {
        $key = '';
        if (isset($_GET['key'])) {
            $key = $_GET['key'];
        }
        $productModel = new ProductModel();
        $products = $productModel->getProductByKey($key);
        $data['products'] = $products;
        echo view('category', $data);
    }
}
