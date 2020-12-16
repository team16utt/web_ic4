<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\mailboxModel;

class mailbox extends BaseController
{
    public function index()
    {
        $model = new mailboxModel();

        $data['title'] = 'mailbox';
        $data['user'] = $model->findAll();
        echo view('admin/mailbox', $data);
        //--------------------------------------------------------------------
    }
    public function detail(){
        $data['title'] = 'mailbox';
        return view('admin/mail_detail', $data);
    }
}
