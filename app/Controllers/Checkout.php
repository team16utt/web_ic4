<?php

namespace App\Controllers;

use App\Models\OrderDetailModel;
use App\Models\OrdersModel;

class Checkout extends BaseController
{
    public function index()
    {
        if ($this->request->getMethod() == 'post') {
            $cName = $this->request->getVar('cName');
            $cPhone = $this->request->getVar('cPhone');
            $cEmail = $this->request->getVar('cEmail');
            $notes = $this->request->getVar('notes');
            // $tinh = $this->request->getVar('tinh');
            // $huyen = $this->request->getVar('huyen');
            // $xa = $this->request->getVar('xa');
            // $address = $tinh . ", " . $huyen . ", " . $xa;
            $address = $this->request->getVar('cAddress');
            $subtotal = $this->request->getVar('subtotal');
            $productIds = $this->request->getVar('productIds');
            $productQuantities = $this->request->getVar('productQuantities');
            $productPrices = $this->request->getVar('productPrices');
            $productsCheckout = [];
            foreach ($productIds as $key => $value) {
                $products = [];
                array_push($products, $productIds[$key], $productQuantities[$key], $productPrices[$key]);
                array_push($productsCheckout, $products);
            }
            // var_dump($productsCheckout);
            $orderModel = new OrdersModel();
            $order_detailModel = new OrderDetailModel();
            $billDetail = $cName . "\n" . $cPhone . "\n" . $cEmail . "\n" . $notes;
            $data_insert = [
                'user_id' => 0,
                'note' => $billDetail,
                'paid_status' => 0,
                'create_on' => date("Y-m-d H:i:s"),
                'shipping_status' => 0,
                'bill_address' => $address
            ];
            $newOrder = $orderModel->insert($data_insert);
            foreach ($productsCheckout as $item) {
                $data_insert = [
                    'order_id' => $newOrder,
                    'product_id' => $item[0],
                    'product_amount' => $item[1],
                    'total_price' => intval($item[1]) * intval($item[2])
                ];
                $newOrderDetail = $order_detailModel->insert($data_insert);
            }
            if ($newOrderDetail > 0) {
                $data['message'] = 'success';
                echo view("checkout", $data);
            } else {
                $data['message'] = 'fail';
                echo view("checkout", $data);
            }
        } else
            echo view("checkout");
    }
}
