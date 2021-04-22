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
    public function hotProduct()
    {
        $limitProductValue = 56;
        $productModel = new ProductModel();
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $records_per_page = 12;
        $offset = ($page - 1) * $records_per_page;
        $allProduct = $productModel->getHotProduct($limitProductValue, 0);

        $total_rows = $limitProductValue;
        $total_pages = ceil($total_rows / $records_per_page);
        $product =  $productModel->getHotProduct($records_per_page, $offset);
        if (isset($_GET['price'])) {
            $sortKey = $_GET['price'];
            if ($sortKey == 'asc') {
                $prices = array_column($product, 'price');
                array_multisort($prices, SORT_ASC, $product);
            } else if ($sortKey == 'desc') {
                $prices = array_column($product, 'price');
                array_multisort($prices, SORT_DESC, $product);
            }
        }

        $data['total_pages'] = $total_pages;
        $data['page'] = $page;
        $data['products'] = $product;
        return view('category', $data);
    }
    public function newProduct()
    {
        $limitProductValue = 56;
        $productModel = new ProductModel();
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $records_per_page = 12;
        $offset = ($page - 1) * $records_per_page;
        $allProduct = $productModel->getNewsProduct($limitProductValue, 0);

        $total_rows = $limitProductValue;
        $total_pages = ceil($total_rows / $records_per_page);
        $product =  $productModel->getNewsProduct($records_per_page, $offset);
        if (isset($_GET['price'])) {
            $sortKey = $_GET['price'];
            if ($sortKey == 'asc') {
                $prices = array_column($product, 'price');
                array_multisort($prices, SORT_ASC, $product);
            } else if ($sortKey == 'desc') {
                $prices = array_column($product, 'price');
                array_multisort($prices, SORT_DESC, $product);
            }
        }

        $data['total_pages'] = $total_pages;
        $data['page'] = $page;
        $data['products'] = $product;
        return view('category', $data);
    }
}
