<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\categoryModel;

class category extends BaseController
{
    public function index()
    {
        $categoryModel = new categoryModel();
        $allCategory = $categoryModel->findAll();
        $data['category'] = $allCategory;
        $data['title'] = 'Category';
        echo view('admin/category/index', $data);
        //--------------------------------------------------------------------
    }
    public function add()
    {
        $data['title'] = 'Category';
        echo view('admin/category/add', $data);
        //--------------------------------------------------------------------
    }
    public function edit()
    {
        $data['title'] = 'Category';
        echo view('admin/category/edit', $data);
        //--------------------------------------------------------------------
    }
}
