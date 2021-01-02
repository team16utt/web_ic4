<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\invoiceModel;
use App\Models\ProductModel;
class invoice extends BaseController
{
    public function index()
    {
        $data['title'] = 'invoice';
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/admin/login');
        }
        $model = new invoiceModel();
        $all_orders = $model->findAll();
        $data['orders'] = $all_orders;
        echo view('admin/invoice/index', $data);
        //--------------------------------------------------------------------
    }
    public function add()
    {
        $model = new invoiceModel();
        $product_model = new ProductModel();
        if($this->request->getMethod() == 'post'){
            $name = $this->request->getVar('client_name');
            $phone = $this->request->getVar('phone');
            $address = $this->request->getVar('address');
            $note = $this->request->getVar('note');
            $paid = $this->request->getVar('status');
            $data_insert = [
                'fullname' => $name,
                'phone' => $phone,
                'paid_status' =>$paid,
                'note' => $note,
                'create_on' => date("Y-m-d"),
                'bill_address' => $address


            ];
            var_dump($data_insert);
            die();
        }
        $data['title'] = 'invoice';
        $data['product'] = $product_model->findAll();
        echo view('admin/invoice/add', $data);
        //--------------------------------------------------------------------
    }
    public function edit()
    {
        $data['title'] = 'invoice';
        echo view('admin/invoice/edit', $data);
        //--------------------------------------------------------------------
    }
    public function delete(){
        echo view('admin/invoice/index');
    }
    public function detail(){
        $db = db_connect();
        $id = $_GET['id'];
        $model = new invoiceModel();
        $user = $model->find($id);
        $data['user_detail'] = $user;
        $sql = 'select product.name, product.price, order_detail.total_price, order_detail.product_amount 
                from product, order_detail
                where product.product_id = order_detail.product_id and order_id='.$id;
        $detail = $db->query($sql)->getResult('array');
        $data['detail'] = $detail;
        return view('admin/invoice/detail',$data);
    }
}
