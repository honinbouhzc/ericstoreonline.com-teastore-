<?php
namespace teastore\model;

class Products extends Model{

    private $title = '';
    
    private $description = '';
    
    public function __construct($id) {
            
            parent::__construct();
        
            $query = "select name,description from categories where url = :id";

            $this->prepare($query);

            $this->prepareBind([':id'=> $id]);

            $this->next();
            
            $this->title = $this->get('name');
            
            $this->description = $this->get('description');

// query the products table       
            $query = "select name, price,image, url,category_url from products where category_url = :id";

            $this->prepare($query);

            $this->prepareBind([':id'=> $id]);
    }


function getName()
{
    return $this->get('name');
}

function getURL()
{
    return $this->get('url');
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

    function getCategoryURL() {
         return $this->get('category_url');
    }
    
     function getDescription(){
        return $this->description;
    }

}
