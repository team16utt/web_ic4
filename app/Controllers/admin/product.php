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
        $data['title'] = 'product';
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
