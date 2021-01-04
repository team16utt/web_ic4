<?php

namespace App\Controllers;

use App\Models\imageModel;
use App\Models\ProductModel;

class product extends BaseController
{
    public function index($pid = 1)
    {
        $productModel = new ProductModel();
        $imageModel = new imageModel();
        $product_result = $productModel->find($pid);
        $productDetail = $product_result;
        $images_result = $imageModel->getImagebyPID($pid);
        if (!$product_result || !$images_result) {
            $data['error'] = $this->db->error();
        } else {
            $totalView = $productDetail['totalView'];
            $totalView += 1;
            $data = [
                'totalView' => $totalView
            ];
            $productModel->update($pid, $data);
            $relatedProduct = $productModel->getRelatedProduct($pid, $productDetail['category_id']);
            $productDetail['images'] = $images_result;
            $data['productDetail'] = $productDetail;
            $data['relatedProduct'] = $relatedProduct;
        }
        echo view('product', $data);
    }

    public function getById()
    {
        if (isset($_GET['pid'])) {
            $pid = $_GET['pid'];
            $productDao = new ProductModel();
            $product_info = $productDao->getProdcutbyId($pid);
            header('Content-Type: application/json');
            return json_encode(['status' => 200, 'data' => $product_info]);
        }
        return json_encode(['status' => 400, 'data' => null]);
    }
}
