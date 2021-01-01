<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class login extends BaseController
{
    public function index(){
        session_start();
        if($this->request->getMethod() == 'post'){
            $model = new UserModel();
            $username = $this->request->getVar('username');
            $password = $this->request->getvar('password');
            $hashed_password = md5($password);
            $data = [
                'username' => $username,
                'password' => $hashed_password 
            ];
            $user = $model->where($data)->first();
            if($user){
                $_SESSION['customer'] = $user;
                // var_dump($_SESSION['customer']);
                return redirect()->to(base_url().'/');
                // return view('index');
            }
            
            die();
        }
        return view('login');
    }
}