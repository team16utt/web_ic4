<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\invoiceModel;
use App\Models\ProductModel;
use App\Models\invoiceDetailModel;
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
        $orderDetail_model = new invoiceDetailModel();
        if($this->request->getMethod() == 'post'){
            $name = $this->request->getVar('client_name');
            $phone = $this->request->getVar('phone');
            $address = $this->request->getVar('address');
            $note = $this->request->getVar('note');
            $paid = $this->request->getVar('status');
            $data_insert = [
                'fullname' => $name,
                'phone' => $phone,
                'paid_status' =>(int)$paid,
                'note' => $note,
                'create_on' => date("Y-m-d"),
                'shipping_status' => 'Đang chờ shipper',
                'bill_address' => $address
            ];
            // var_dump($data_insert);
            $product_var = $this->request->getVar('name');
            $product_amount = $this->request->getVar('value');
            $id = $model->insert($data_insert);
            echo $id;
            for ($i = 0; $i < count($product_var); $i++){
                // echo $product_var[$i].'  ';
                // echo $product_amount[$i].'\n';
                $price = str_replace(".","",$product_model->find($product_var[$i])['price']);
                $total = (int)$price * (int) $product_amount[$i];
                // echo $total;
                $data_order_insert = [
                    'order_id' => $id,
                    'product_id' => (int) $product_var[$i],
                    'total_price' => (int) $total,
                    'product_amount' => (int) $product_amount[$i]
                ];
                var_dump($data_order_insert);
                $orderDetail_model->insert($data_order_insert);
            }
            return redirect()->to(base_url().'/admin/invoice');
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
        $id = $_GET['id'];
        $model = new invoiceModel();
        $model_detail = new invoiceDetailModel();
        $model_detail->delete('order_id',(int)$id);
        $model->delete($id);
        return redirect()->to(base_url().'/admin/invoice');
        
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
