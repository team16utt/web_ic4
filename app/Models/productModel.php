<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    // protected $DBGroup = 'gear16';
    protected $table      = 'product';
    protected $primaryKey = 'product_id';

    protected $returnType     = 'array';
    protected $allowedFields = ['product_id','category_id','name','price','link','image','productCode','featureData','createdDate','view','quantity','modifiedDate','createdBy'];
    // protected $createField = '';
    // protected $updatedField = '';
}