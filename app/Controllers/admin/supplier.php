<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\supplierModel;

class supplier extends BaseController{
    
    public function index()
    {
        $data['title'] = 'supplier';
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/admin/login');
        }
        $model = new supplierModel();
        $data['supplier'] = $model->findAll();
        echo view('admin/supplier/index',$data);
    }
    public function add(){
        $data['title'] = 'supplier';
        $model = new supplierModel();
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/admin/login');
        }
        if($this->request->getMethod() == 'post'){
            $company_name = $this->request->getVar('companyname');
            $url = $this->request->getVar('url');
            $type = $this->request->getVar('type');
            $email = $this->request->getVar('email');
            $phone = $this->request->getVar('phone');
            $address = $this->request->getVar('address');
            $country = $this->request->getVar('country');
            $file = $this->request->getFile('file');
            if ($file->isValid() && !$file->hasMoved()){
                $newName = $file->getRandomName();
                $path = $file->move("./public/client/assets/images/",$newName);
                $url_avatar = base_url()."/public/client/assets/images/".$newName;              
            }
            $data_insert = [
                'company_name' => $company_name,
                'image' => $url_avatar,
                'weburl' => $url,
                'product_type' => $type,
                'telephone' => $phone,
                'email' => $email,
                'country' => $country,
                'address' => $address
            ];
            $model->insert($data_insert);
            return redirect()->to(base_url().'/admin/supplier');
        }
        return view('admin/supplier/add',$data);
    }
    public function edit(){
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/admin/login');
        }
        $id = $_GET['id'];
        $model = new supplierModel();
        $detail = $model->find($id);
        $data['supplier'] = $detail;
        $data['title'] = 'supplier';
        return view('admin/supplier/add',$data);
    }
    public function delete(){
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/admin/login');
        }
        $id = $_GET['id'];
        $model = new supplierModel();
        $model->delete($id);
        return redirect()->to(base_url().'/admin/supplier');
    }
}
