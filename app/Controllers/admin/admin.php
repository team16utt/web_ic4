<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;
use RuntimeException;

class admin extends BaseController
{
    public function index()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        // if(isset($_SESSION['user']) != ''){
        // echo view('admin/login');
        $adminModel = new UserModel();
        // echo $_SESSION['user']['fullname'];
        // die();
        $data['title'] = 'admin';
        $data['user'] = $adminModel->findAll();
        echo view('admin/admin/index', $data);
        // session_destroy();
        // }


        //--------------------------------------------------------------------
    }
    public function add()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }

        helper('file');
        helper('form');

        $data['title'] = 'admin';
        if ($this->request->getMethod() == 'post') {
            $model = new UserModel();
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $fullname = $this->request->getVar('fullname');
            $birthday = $this->request->getVar('birthday');
            $email = $this->request->getVar('email');
            $gender = $this->request->getVar('gender');
            $phone = $this->request->getVar('phone');
            $address = $this->request->getVar('address');
            $country = $this->request->getVar('country');
            $facebook = $this->request->getVar('facebook');
            $file = $this->request->getFile('file');
            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $path = $file->move("./public/client/assets/product/", $newName);
            }


            $url_avatar = "/public/client/assets/product/" . $newName;
            $data_insert = [
                'image' => $url_avatar,
                'fullname' => $fullname,
                'username' => $username,
                'password' => md5($password),
                'birthday' => $birthday,
                'gender' => $gender,
                'phone_number' => $phone,
                'email' => $email,
                'address' => $address,
                'status' => 1,
                'role_id' => 1,
                'country' => $country,
                'created_on' => date('Y-m-d'),
                'facebook' => $facebook,
                'twitter' => $facebook,
                'gmail' => $facebook,
                'insta' => $facebook,
                'createdDate' => date('Y-m-d'),
                'modifiedDate' => date('Y-m-d'),
                'createdBy' => $_SESSION['user']['fullname']
            ];
            $model->insert($data_insert);

            // $db->table('users')->insert($data_insert);
            // echo var_dump($data_insert);
            return redirect()->to(base_url() . '/admin/admin');
        }
        echo view('admin/admin/add', $data);

        //--------------------------------------------------------------------
    }
    public function edit()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $id = $_GET['id'];
        $model = new UserModel();
        $data['info'] = $model->where('id', $id)->findAll();
        $data['title'] = 'admin';
        if ($this->request->getMethod() == 'post') {

            $model = new UserModel();
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $fullname = $this->request->getVar('fullname');
            $birthday = $this->request->getVar('birthday');
            $email = $this->request->getVar('email');
            $gender = $this->request->getVar('gender');
            $phone = $this->request->getVar('phone');
            $address = $this->request->getVar('address');
            $country = $this->request->getVar('country');
            $facebook = $this->request->getVar('facebook');
            $file = $this->request->getFile('file');
            if ($file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $path = $file->move("./public/client/assets/product/", $newName);
                    $url_avatar = "/public/client/assets/product/" . $newName;
                } else {
                    $url_avatar = '';
                }
            }
            $data_insert = [
                'id' => $id,
                'image' => $url_avatar,
                'fullname' => $fullname,
                'username' => $username,
                'password' => md5($password),
                'birthday' => date('d/m/Y', strtotime($birthday)),
                'gender' => $gender,
                'phone_number' => $phone,
                'email' => $email,
                'address' => $address,
                'status' => 1,
                'role_id' => 1,
                'country' => $country,
                'created_on' => date('Y-m-d'),
                'facebook' => $facebook,
                'twitter' => $facebook,
                'gmail' => $facebook,
                'insta' => $facebook,
                'createdDate' => date('Y-m-d'),
                'modifiedDate' => date('Y-m-d'),
                'createdBy' => "VUONG"
            ];
            $model->save($data_insert);
            return redirect()->to(base_url() . '/admin/admin');
        }
        echo view('admin/admin/edit', $data);
        //--------------------------------------------------------------------
    }
    public function delete()
    {
        // echo '<script>confirm("Are you the boss?")</script>';
        // die();
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $username = $_GET['username'];
        $adminModel = new UserModel();
        $adminModel->where('username', $username)->delete();
        $data['title'] = 'admin';
        $data['user'] = $adminModel->findAll();
        return redirect()->to(base_url() . '/admin/admin');
    }
}
