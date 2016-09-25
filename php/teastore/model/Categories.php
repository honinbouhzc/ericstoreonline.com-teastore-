<?php
namespace teastore\model;

class Categories extends Model {

    public function __construct() {

        parent::__construct();

        $query = "select id, name, image, url, description from categories";
        $this->query($query);
    }

    function getName() {
        return $this->get('name');
    }

    function getURL() {
        return $this->get('url');
    }

    function getImage() {
        return $this->get('image');
    }
    function getDescription(){
        return $this->get('description');
    }
   
}
