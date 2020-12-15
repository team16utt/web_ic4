<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    // protected $DBGroup = 'gear16';
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $allowedFields = ['username','image', 'email','password','fullname','birthday','gender','phone_number','email','address','status','country','role_id','created_on','facebook','createdDate','modifiedDate','createdBy'];
    // protected $createField = '';
    // protected $updatedField = '';
}