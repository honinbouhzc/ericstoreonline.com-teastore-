<?php
namespace teastore\model\admin;

class ProductData extends \teastore\model\Model{
    
    public function __construct() {
        parent::__construct();

        $query = "select id, name, price ,category_url ,instock from products";
        $this->query($query);
    }
    function getId(){
        return $this->get('id');
    }
    
    function getName() {
        return $this->get('name');
    }

    function getPrice() {
        return $this->get('price');
    }
    
    function getCategoryUrl() {
        return $this->get('category_url');
    }
    
    function getInstock(){
        return $this->get('instock');
    }
}
