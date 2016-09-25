<?php
namespace teastore\controller;

class Home extends Controller{
   
    public function __construct() {
        // instaniate the model
     
    }

    public function generateOutput() {
// instaniate the view and give it a title and model
        $h = new \teastore\view\Home($this);
// generate the HTML page
        $h->page();
    }

    public function getTitle() {
        return "Tea Store";
    }

}
