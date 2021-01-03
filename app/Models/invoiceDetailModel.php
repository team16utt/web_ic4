<?php namespace App\Models;

use CodeIgniter\Model;

class invoiceDetailModel extends Model
{
    protected $table = 'order_detail';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','order_id','product_id','total_price','product_amount'];
}