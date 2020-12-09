<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class login extends BaseController
{
    public function index()
    {
        // $data['title'] = 'Trang chủ';
        return view('admin/login');
        //--------------------------------------------------------------------
    }
    public function login(){
        
    }
}
