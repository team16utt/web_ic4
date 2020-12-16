<?php namespace App\Models;

use CodeIgniter\Model;

class mailboxModel extends Model
{
    // protected $DBGroup = 'gear16';
    protected $table      = 'contact';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $allowedFields = ['id','fullname','phone','email','content','created_on','state'];
    // protected $createField = '';
    // protected $updatedField = '';
}