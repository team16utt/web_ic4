<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class product extends BaseController
{
    public function index()
    {
        $data['title'] = 'product';
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
