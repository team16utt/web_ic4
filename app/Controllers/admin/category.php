<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\categoryModel;
use LocDau;

class category extends BaseController
{
    public function index()
    {
        $categoryModel = new categoryModel();
        $allCategory = $categoryModel->findAll();
        $data['category'] = $allCategory;
        $data['title'] = 'Category';
        echo view('admin/category/index', $data);
        //--------------------------------------------------------------------
    }
    public function add()
    {   
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
}

