<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class login extends BaseController
{
    public function index()
    {
        session_start();
        if ($_SESSION['customer']) {
            return redirect()->to(base_url());
        }
        if ($this->request->getMethod() == 'post') {
            $model = new UserModel();
            $username = $this->request->getVar('username');
            $password = $this->request->getvar('password');
            $hashed_password = md5($password);
            $data = [
                'username' => $username,
                'password' => $hashed_password
            ];
            $user = $model->where($data)->first();
            if ($user["role_id"] != 1) {
                $_SESSION['customer'] = $user;
                // var_dump($_SESSION['customer']);
                return redirect()->to(base_url() . '/');
                // return view('index');
            } else {
                $_SESSION['user'] = $user;
                return redirect()->to('admin');
            }

            die();
        }
        return view('login');
    }
    public function logout()
    {
        session_start();
        session_destroy();
        return redirect()->to(base_url());
    }
}
