<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    // protected $DBGroup = 'gear16';
    protected $table      = 'product';
    protected $primaryKey = 'product_id';

    protected $returnType     = 'array';
    protected $allowedFields = ['product_id', 'category_id', 'supplier_id', 'name', 'price', 'link', 'image', 'productCode', 'featureData', 'createdDate', 'totalView', 'quantity', 'modifiedDate', 'createdBy'];
    // protected $createField = '';
    // protected $updatedField = '';

    public function getProdcutbyId(int $id)
    {
        return $this->find($id);
    }
    public function getRelatedProduct(int $pid, int $cid)
    {
        return $this->where('category_id', $cid)->where('product_id !=', $pid)->findAll(8, 0);
    }
    public function getNewsProduct(int $records_per_page, int $offset)
    {
        return $this->orderBy('createdDate', 'desc')->findAll($records_per_page, $offset);
    }
    public function getHotProduct(int $records_per_page, int $offset)
    {
        return $this->orderBy('totalView', 'desc')->findAll($records_per_page, $offset);
    }
    public function getProductByKey(string $key)
    {
        return $this->like('name', $key)->findAll();
    }
    public function getCountResult(int $cid)
    {
        return $this->where('category_id', $cid)->countAllResults();
    }
    public function paginationResult(int $cid, int $offset, int $records_per_page)
    {
        return $this->where('category_id', $cid)->findAll($records_per_page, $offset);
    }
}
