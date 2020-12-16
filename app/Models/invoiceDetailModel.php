<?php namespace App\Models;

use CodeIgniter\Model;

class invoiceDetailModel extends Model
{
    // protected $DBGroup = 'gear16';
    protected $table      = 'order_detail';
    protected $primaryKey = 'order_id';

    protected $returnType     = 'array';
    protected $allowedFields = ['order_id','product_id','total_price','product_amount'];
    // protected $createField = '';
    // protected $updatedField = '';
}