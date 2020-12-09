<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    // protected $DBGroup = 'gear16';
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
}