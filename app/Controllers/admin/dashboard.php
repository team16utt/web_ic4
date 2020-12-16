<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class dashboard extends BaseController
{
    public function index()
    {
        $data['title'] = 'Trang chủ';
        echo view('admin/dashboard', $data);

        //--------------------------------------------------------------------
    }
}
