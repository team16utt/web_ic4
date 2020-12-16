<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class profile extends BaseController
{
    public function index()
    {
        $id = $_GET['id'];
        $adminModel = new UserModel();
        $user = $adminModel->find($id);
        $data['title'] = 'profile';
        $data['user'] = $user;
        echo view('admin/admin/profile', $data);
        //--------------------------------------------------------------------
    }
}
