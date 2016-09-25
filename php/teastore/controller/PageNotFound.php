<?php
namespace teastore\controller;

class PageNotFound extends Controller{
   
    public function __construct() {
  
    }

    public function generateOutput() {
        // instaniate the view and give it a title and model
        $category = new \teastore\view\PageNotFound($this);
// generate the HTML page
        $category->page();
    }

    public function getTitle() {
        return "Page Not Found";
    }

}
