<?php
namespace teastore\controller;

class Products  extends Controller{
    
    public function __construct($url) {       
        // get the category of product from the url
        $category = $url[1];
        // instaniate the model
        $this->model  = new \teastore\model\Products($category);
    }

    public function generateOutput() {
        // instaniate the view and give it a title and model
        $category = new \teastore\view\Products($this);
        // generate the HTML page
        $category->page();
    }

    public function getTitle() {
        return $this->model->getTitle();
    }
    
 

}
