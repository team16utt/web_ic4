<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class invoice extends BaseController
{
    public function index()
    {
        $data['title'] = 'invoice';
        echo view('admin/invoice/index', $data);
        //--------------------------------------------------------------------
    }
    public function add()
    {
        $data['title'] = 'invoice';
        echo view('admin/invoice/add', $data);
        //--------------------------------------------------------------------
    }
    public function edit()
    {
        $data['title'] = 'invoice';
        echo view('admin/invoice/edit', $data);
        //--------------------------------------------------------------------
    }
}
