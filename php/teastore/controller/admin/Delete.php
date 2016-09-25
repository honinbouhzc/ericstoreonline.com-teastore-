<?php
namespace teastore\controller\admin;

class Delete extends Admin{
   
    public function __construct($url) {
        parent::__construct(); 
        
        $id = $url[1];
        
        new \teastore\model\admin\Delete($id);
        
        $this->model = new \teastore\model\admin\Users();

    }

    public function generateOutput(){
// instaniate the view and give it a title and model
        $Delete = new \teastore\view\admin\Users($this);
// generate the HTML page
        $Delete->page();
    }

    public function getTitle() {
        return '';
    }

}
