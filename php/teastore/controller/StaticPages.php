<?php
namespace teastore\controller;

class StaticPages extends Controller{
   
    private $pageName = '';
    
    public function __construct($url) {
        
        $this->pageName = $url[1];
        
    }
    
    
    public function generateOutput() {
// instaniate the view and give it a title and model
        $staticpages = new \teastore\view\StaticPages($this);
// generate the HTML page
        $staticpages->page();
    }

    public function getTitle() {
        return "";
    }

    public function getPageName()
    {
        return $this->pageName;
    }
    
}

