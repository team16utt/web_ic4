<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\mailboxModel;

class mailbox extends BaseController
{
    public function index()
    {
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/admin/login');
        }
        $model = new mailboxModel();
        // if($_POST['delete']){
        //     echo var_dump($_POST['delete']);
        //     die();
        // }
        if($this->request->getMethod() == 'post'){
            $arr = $this->request->getVar('arrDelete');
            foreach ($arr as $id ){
                $model->where('id', $id)->delete();
            }
        }
        $data['title'] = 'mailbox';
        $data['user'] = $model->findAll();
        echo view('admin/mailbox', $data);
        //--------------------------------------------------------------------
    }
    public function detail(){
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/admin/login');
        }
        if(isset($_GET['id'])){
            $model = new mailboxModel();
            $data['mail'] = $model->find($_GET['id']);
            return view('admin/mail_detail', $data);
        }
        $data['title'] = 'mailbox';
        return view('admin/mail_detail', $data);
    }
}
