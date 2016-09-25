<?php
namespace teastore\model\admin;

class Delete extends \teastore\model\Model{
    
    public function __construct($userId) {
        parent::__construct();

        $query = "delete from users where id=$userId";
        $this->execute($query);
    }
    
    
}