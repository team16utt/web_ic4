<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\invoiceDetailModel;

class invoiceDetail extends BaseController
{
    public function index()
    {
        $id = $_GET['id'];
        // $invoiceDetailModel = new invoiceDetailModel();
        // $invoiceDetail = $invoiceDetailModel->find($id);
        $data['title'] = 'invoiceDetail';

        $get_invoice_detail_sql = "SELECT * FROM (
            SELECT order_detail.order_id,order_detail.total_price,order_detail.product_amount,product.name
            FROM order_detail,product
            WHERE order_detail.product_id = product.product_id) B
        WHERE B.order_id = $id";

        $get_info_admin_sql = "SELECT * FROM (
            SELECT orders.id,orders.admin_id,orders.paid_status,orders.note,orders.create_on,orders.shipping_status,orders.bill_address,users.username 
            FROM orders,users 
            WHERE orders.admin_id = users.id) B
        WHERE B.id = $id";
        $info_admin = $this->$db->query($get_info_admin_sql)->getResult();
        $data['info_admin'] = $info_admin;
        // print_r($info_admin);

        $get_info_client_sql = "SELECT * FROM (
            SELECT orders.id,orders.create_on,orders.bill_address,customer.username,customer.fullname,customer.address 
            FROM orders,customer 
            WHERE orders.client_id = customer.id) B 
        WHERE B.id = $id";
        $info_client = $this->$db->query($get_info_client_sql)->getResult();
        $data['info_client'] = $info_client;
        // print_r($info_client);

        $invoiceDetail = $this->$db->query($get_invoice_detail_sql)->getResult();
        $data['invoiceDetail'] = $invoiceDetail;
        echo view('admin/invoice/invoiceDetail', $data);
        //--------------------------------------------------------------------
    }
}