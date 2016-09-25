<?php
namespace teastore\model\admin;

class Lock extends \teastore\model\Model{
    
    public function __construct($userId) {
        parent::__construct();

        $query = "update users set locked = not locked where id=$userId";
        $this->execute($query);
    }
    
    
}

