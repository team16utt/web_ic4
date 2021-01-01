<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class profile extends BaseController
{
    public function index()
    {
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/admin/login');
        }
        $id = $_GET['id'];
        $adminModel = new UserModel();
        $user = $adminModel->find($id);
        $data['title'] = 'profile';
        $data['user'] = $user;
        echo view('admin/admin/profile', $data);
        //--------------------------------------------------------------------
    }
}
