<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\commentModel;


class comment extends BaseController
{
    public function index()
    {
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/admin/login');
        }
        $model = new commentModel();
        $comment = $model->findAll();
        $data['title'] = 'comment';
        $data['comment'] = $comment;
        return view('/admin/comment/index',$data);
    }
    public function add(){
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/admin/login');
        }
        $data['title'] = 'comment';
        $model = new commentModel();
        if($this->request->getMethod() == 'post'){
            $author = $this->request->getVar('author');
            $address = $this->request->getVar('address');
            $comment = $this->request->getVar('comment');
            $data_insert = [
                'author' => $author,
                'address' => $address,
                'content' => $comment,
                'createdDate' => date("Y-m-d H:i:s"),
            ];
            $model->insert($data_insert);
            return redirect()->to(base_url().'/admin/comment');
        }
        return view('/admin/comment/add',$data);
    }
    public function edit(){
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/admin/login');
        }
        $data['title'] = 'comment';
        $model = new commentModel();
        $id = $_GET['id'];
        $save = $model->find($id);
        $data['comment'] = $save;
        if($this->request->getMethod() == 'post'){
            $author = $this->request->getVar('author');
            $address = $this->request->getVar('address');
            $comment = $this->request->getVar('comment');
            $data_insert = [
                'author' => $author,
                'address' => $address,
                'content' => $comment
            ];
            $model->update($id,$data_insert);
            return redirect()->to(base_url().'/admin/comment');
        }
        return view('/admin/comment/edit',$data);
    }
    public function delete(){
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/admin/login');
        }
        $data['title'] = 'comment';
        $model = new commentModel();
        $id = $_GET['id'];
        $model->delete($id);
        return redirect()->to(base_url().'/admin/comment');
    }
    public function detail(){
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/admin/login');
        }
        $data['title'] = 'comment';
        $model = new commentModel();
        $id = $_GET['id'];
        $save = $model->find($id);
        $data['comment'] = $save;
        return view('/admin/comment/detail',$data);
    }

}