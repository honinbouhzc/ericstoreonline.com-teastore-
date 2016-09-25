<?php
namespace teastore\model;

class Specifications extends Model{
    
private $title= '';
    
public function __construct($id) {
   
        parent::__construct(); 
// query the products table       
       $query = "select id,name, price,image,description,category_url,url from products where url = :id";
        
       $this->prepare($query);
       
       $this->prepareBind([':id'=> $id]);
          
       $this->next();

    }
   
    
function getId()
{
       return $this->get('id'); 
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

function getDescription()
{
    return $this->get('description');
}

function getTitle() {
        return $this->getName();
    }
function getCategoryURL()
{
   return $this->get('category_url');  
}
function getSpecificationURL()
{
    return $this->get('category_url'). "/" . $this->get('url');
}
}
