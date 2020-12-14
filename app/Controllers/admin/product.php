<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\imageModel;

class product extends BaseController
{
    public function index()
    {
        $adminModel = new ProductModel();

        $data['title'] = 'product';
        $data['user'] = $adminModel->findAll();
        echo view('admin/product/index', $data);
        //--------------------------------------------------------------------
    }
    public function add()
    {
        session_start();
        $data['title'] = 'product';
        if($this->request->getMethod() == 'post'){
            $model = new ProductModel();
            $name = $this->request->getVar('product_name');
            $price = $this->request->getVar('price');
            $quantity = $this->request->getVar('quantity');
            $product_code = $this->request->getVar('code');
            $category = $this->request->getVar('category');
            $provider = $this->request->getVar('provider');
            $path = $this->request->getFile('fileToUpload');
            
            if ($path != ''){
                $newName = $path->getRandomName();
                $path = $path->move("./public/client/assets/product/",$newName);
            }
            
            
            $url_thumnail = "/public/client/assets/product/".$newName;
            // echo $url_thumnail;
            // die();
            $desc_key = $this->request->getVar('name');
            $desc_value = $this->request->getVar('value');
            $description = [];
            for ($i = 0; $i < count($desc_key); $i++){
                array_push($description,$desc_key[$i].':'.$desc_value[$i]);
            }
            $description = join('|',$description);
            $insert_product = [
                'category_id' => (int)$category,
                'supplier_id'=> 0,
                'name' => $name,
                'quantity' => $quantity,
                'view' => 0,
                'link' => "",
                'image' => $url_thumnail,
                'price' => $price,
                'productCode' => $product_code,
                'featureData' => $description,
                'createdDate' => date("Y-m-d h:i:s"),
                'modifiedDate' => date("Y-m-d h:i:s"),
                'createdBy' => $_SESSION['user']['fullname']
            ];
            $id = $model->insert($insert_product);
            // echo $id;
            // die();
            $model_image = new imageModel();
            if($imagefile = $this->request->getFiles())
            {
            foreach($imagefile['image_more'] as $img)
            {
                if ($img->isValid() && ! $img->hasMoved())
                {
                    $newName = $img->getRandomName();
                    $img->move("./public/client/assets/product/", $newName);
                    $url = '/public/client/assets/product/'.$newName;
                    $data_image = [
                        'product_id' => (int) $id,
                        'imageThumb' => $url_thumnail,
                        'imageSmall' => $url,
                        'createdDate' => date("Y-m-d h:i:s"),
                        'modifiedDate' => date("Y-m-d h:i:s"),
                        'createdBy' => $_SESSION['user']['fullname']
                    ];
                    $model_image->insert($data_image);
                    
                }
            }
            }
            
            return redirect()->to(base_url().'/admin/product');
        }
        echo view('admin/product/add', $data);
        //--------------------------------------------------------------------
    }
    public function edit()
    {
        $data['title'] = 'product';
        echo view('admin/product/edit', $data);
        //--------------------------------------------------------------------
    }
}
