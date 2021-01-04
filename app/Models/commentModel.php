<?php

namespace App\Models;

use CodeIgniter\Model;

class commentModel extends Model
{
    protected $table = 'comment';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'author', 'content', 'createdDate', 'address', 'avatar'];
    public function getAllComment()
    {
        return $this->findAll();
    }
}
