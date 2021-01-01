<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\categoryModel;
use LocDau;

class category extends BaseController
{
    public function index()
    {
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/admin/login');
        }
        $categoryModel = new categoryModel();
        $allCategory = $categoryModel->findAll();
        $data['category'] = $allCategory;
        $data['title'] = 'Category';
        echo view('admin/category/index', $data);
        //--------------------------------------------------------------------
    }
    public function add()
    {   
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/admin/login');
        }
        session_start();
        $data['title'] = 'Category';
        $locDau = new LocDau();
        if($this->request->getMethod() == 'post'){
            $name = $this->request->getVar('cName');
            $description = $this->request->getVar('cDesription');
            $model = new categoryModel();
            $data_insert = [
                            'name' => $name,
                            'metaTitle' => $locDau->vn_to_str($name),
                            'description' => $description,
                            'createdDate' => date("Y-m-d H:i:s"),
                            'createdBy' => $_SESSION['user']['fullname']
            ];
            $model->insert($data_insert);
            return redirect()->to(base_url().'/admin/category');
        }
        echo view('admin/category/add', $data);
        //--------------------------------------------------------------------
    }
    public function edit()
    {
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/admin/login');
        }
        session_start();
        $id = $_GET['id'];
        $model = new categoryModel();
        $locDau = new LocDau();
        $item = $model->find($id);
        $data['item'] = $item;
        $data['title'] = 'Category';
        if($this->request->getMethod() == 'post'){
            $name = $this->request->getVar('cName');
            $description = $this->request->getVar('cDesription');
            $data_update = [
                
                'name' => $name,
                'metaTitle' => $locDau->vn_to_str($name),
                'description' => $description,
                'modifiedDate' => date("Y-m-d H:i:s"),
                'createdBy' => $_SESSION['user']['fullname']
            ];
            $model->update($id, $data_update);
            return redirect()->to(base_url().'/admin/category');
        }
        echo view('admin/category/edit', $data);
        //--------------------------------------------------------------------
    }
    public function delete(){
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/admin/login');
        }
        $id = $_GET['id'];
        $Model = new categoryModel();
        $Model->where('category_id', $id)->delete();
        $data['title'] = 'category';
        $data['user'] = $Model->findAll();
        return redirect()->to(base_url().'/admin/category');
    }
}

