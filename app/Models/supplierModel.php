<?php

namespace App\Models;

use CodeIgniter\Model;

class supplierModel extends Model
{
    // protected $DBGroup = 'gear16';
    protected $table      = 'supplier';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $allowedFields = ['id', 'company_name', 'image', 'weburl', 'product_type', 'telephone', 'email', 'country', 'address'];
    // protected $createField = '';
    // protected $updatedField = '';
    public function getAllSupplier()
    {
        return $this->findAll();
    }
}
