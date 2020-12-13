<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\categoryModel;
function vn_str_filter ($str){
 
       $unicode = array(
 
           'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
 
           'd'=>'đ',
 
           'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
 
           'i'=>'í|ì|ỉ|ĩ|ị',
 
           'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
 
           'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
 
           'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
 
           'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
 
           'D'=>'Đ',
 
           'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
 
           'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
 
           'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
 
           'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
 
           'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
 
       );
 
      foreach($unicode as $nonUnicode=>$uni){
 
           $str = preg_replace("/($uni)/i", $nonUnicode, $str);
 
      }
 
       return $str;
 
   }
 

class category extends BaseController
{
    public function index()
    {
        $categoryModel = new categoryModel();
        $allCategory = $categoryModel->findAll();
        $data['category'] = $allCategory;
        $data['title'] = 'Category';
        echo view('admin/category/index', $data);
        //--------------------------------------------------------------------
    }
    public function add()
    {   
        session_start();
        $data['title'] = 'Category';
        if($this->request->getMethod() == 'post'){
            $name = $this->request->getVar('cName');
            $description = $this->request->getVar('cDesription');
            $model = new categoryModel();
            $data_insert = [
                            'name' => $name,
                            'metaTitle' => str_replace(' ', '-',vn_str_filter($name)),
                            'description' => $description,
                            'createdDate' => date("Y-m-d h:i:s"),
                            'modifiedDate' => date("Y-m-d h:i:s"),
                            'createdBy' => $_SESSION['user']['fullname']
            ];
            $model->insert($data_insert);
            return redirect()->to(base_url().'/admin/category');
        }
        echo view('admin/category/add', $data);
        //--------------------------------------------------------------------
    }
    public function edit()
    {
        $id = $_GET['id'];
        $model = new categoryModel();
        $item = $model->find($id);
        $data['item'] = $item;
        $data['title'] = 'Category';
        if($this->request->getMethod() == 'post'){
            $name = $this->request->getVar('cName');
            $description = $this->request->getVar('cDesription');
            $data_update = [
                
                'name' => $name,
                'metaTitle' => str_replace(' ', '-',vn_str_filter($name)),
                'description' => $description,
                'modifiedDate' => date("Y-m-d h:i:s"),
                'createdBy' => $_SESSION['user']['fullname']
            ];
            $model->update($id, $data_update);
            return redirect()->to(base_url().'/admin/category');
        }
        echo view('admin/category/edit', $data);
        //--------------------------------------------------------------------
    }
}

