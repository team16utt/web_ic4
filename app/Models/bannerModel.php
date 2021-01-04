<?php

namespace App\Models;

use CodeIgniter\Model;

class bannerModel extends Model
{
    protected $table = 'banner';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'name', 'link', 'banner_id', 'createdDate', 'modifiedDate', 'createdBy'];
    public function getAllBanner()
    {
        return $this->findAll();
    }
}
