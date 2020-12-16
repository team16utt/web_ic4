<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class ivmd{
    protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db =&$db;
    }
    function getOderDetail(){
        $builder= $this->db->table('order_detail');
        // $builder->select('*');
        $builder->join('orders','orders.id = order_detail.order_id');
        $order = $builder->get()->getResultArray();
        return $order;
    }
}