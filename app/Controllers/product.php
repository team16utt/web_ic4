<?php

namespace App\Controllers;

class product extends BaseController
{
    public function index($pid = 1)
    {    
        $args = explode('/', $_SERVER['QUERY_STRING']);

        $get_product_sql = "SELECT * FROM product WHERE product_id = $pid";
        $get_images_sql = "SELECT * FROM image WHERE product_id = $pid";
        $product_result = $this->$db->query($get_product_sql);
        $images_result = $this->$db->query($get_images_sql);
        if (!$product_result || !$images_result) {
            $data['error'] = $this->db->error();
        } else {
            $productDetail = $product_result->getRow();
            $get_related_product_sql = "SELECT * FROM product WHERE product_id <> $pid
            AND category_id = $productDetail->category_id LIMIT 0,6";
            $related_product_result = $this->$db->query($get_related_product_sql);
            $relatedProduct = $related_product_result->getResult();
            $productDetail->images = $images_result->getResult();
            $data['productDetail'] = $productDetail;
            $data['relatedProduct'] = $relatedProduct;
        }
        echo view('product', $data);
    }
}
