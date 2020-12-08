<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class admin extends BaseController
{
    public function index()
    {
        $data['title'] = 'admin';
        echo view('admin/admin/index', $data);
        //--------------------------------------------------------------------
    }
    public function add()
    {
        $data['title'] = 'admin';
        echo view('admin/admin/add', $data);
        //--------------------------------------------------------------------
    }
    public function edit()
    {
        $data['title'] = 'admin';
        echo view('admin/admin/edit', $data);
        //--------------------------------------------------------------------
    }
}
