<?php
namespace teastore\controller;

class Specifications  extends Controller{
    
    public function __construct($url) {       
        // get the category of product from the url
        $category = $url[1];
        // instaniate the model
        $this->model  = new \teastore\model\Specifications($category);
    }

    public function generateOutput() {
        // instaniate the view and give it a title and model
        $category = new \teastore\view\Specifications($this);
        // generate the HTML page
        $category->page();
    }

    public function getTitle() {
        return $this->model->getTitle();
    }

}
