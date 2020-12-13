<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class product extends BaseController
{
    public function index()
    {
        $adminModel = new ProductModel();

        $data['title'] = 'product';
        $data['user'] = $adminModel->findAll();
        echo view('admin/product/index', $data);
        //--------------------------------------------------------------------
    }
    public function add()
    {
        session_start();
        $data['title'] = 'product';
        if($this->request->getMethod() == 'post'){
            $name = $this->request->getVar('product_name');
            $price = $this->request->getVar('price');
            $quantity = $this->request->getVar('quantity');
            $product_code = $this->request->getVar('code');
            $category = $this->request->getVar('category');
            $provider = $this->request->getVar('provider');
            $path = $this->request->getFile('fileToUpload')->store('product/');
            $url = base_url() .'/writable/uploads/'.$path;
            echo $url;
            die();
        }
        echo view('admin/product/add', $data);
        //--------------------------------------------------------------------
    }
    public function edit()
    {
        $data['title'] = 'product';
        echo view('admin/product/edit', $data);
        //--------------------------------------------------------------------
    }
}
