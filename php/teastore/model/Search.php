<?php
namespace teastore\model;

class Search extends Model{

    private $title = '';
    
    public function __construct($search) {
            
            parent::__construct();

// query the products table       
            $query = "select name, price,image, url,category_url  from products where description like :search";

            $this->prepare($query);

            $this->prepareBind([':search'=> "%$search%"]);
    }


function getName()
{
    return $this->get('name');
}

function getURL()
{
    return $this->get('url');
}

function getCategoryURL()
{
    return $this->get('category_url');
}

function getImage()
{
    return $this->get('image');
}

function getPrice()
{
    return $this->get('price');
}

function getTitle() {
        return $this->title;
    }


}
