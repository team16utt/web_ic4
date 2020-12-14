<?php namespace App\Models;

use CodeIgniter\Model;

class imageModel extends Model
{
    // protected $DBGroup = 'gear16';
    protected $table      = 'image';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $allowedFields = ['id','product_id','imageThumb','imageSmall','createdDate','modifiedDate','createdBy'];
    // protected $createField = '';
    // protected $updatedField = '';
}