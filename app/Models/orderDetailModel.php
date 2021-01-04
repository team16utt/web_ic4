<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderDetailModel extends Model
{
    // protected $DBGroup = 'gear16';
    protected $table      = 'order_detail';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $allowedFields = ['id', 'order_id', 'product_id', 'total_price', 'product_amount'];
    // protected $createField = '';
    // protected $updatedField = '';
    public function getAll()
    {
        return $this->findAll();
    }
}
