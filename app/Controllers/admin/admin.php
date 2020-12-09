<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class admin extends BaseController
{
    public function index()
    {
        $adminModel = new UserModel();

        $data['title'] = 'admin';
        $data['user'] = $adminModel->findAll();
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
    public function delete(){
        // echo '<script>confirm("Are you the boss?")</script>';
        // die();
        $id = $_GET['id'];
        $adminModel = new UserModel();
        $adminModel->where('id', $id)->delete();
        $data['title'] = 'admin';
        $data['user'] = $adminModel->findAll();
        echo view('admin/admin/index', $data);
    }
}
