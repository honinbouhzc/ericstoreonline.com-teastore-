<?php
namespace teastore\controller;

class Search extends Controller{
    
    private $search = '';
    
    
    public function __construct($url) {       
       $this->search = filter_input(INPUT_POST,'search');
        // instaniate the model
        $this->model  = new \teastore\model\Search($this->search);
    }

    public function generateOutput() {
        // instaniate the view and give it a title and model
        $category = new \teastore\view\Search($this);
        // generate the HTML page
        $category->page();
    }

    public function getTitle() {
        return "search result for " . $this->search; 
    }

}
