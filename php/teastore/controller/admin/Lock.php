<?php
namespace teastore\controller\admin;

class Lock extends Admin{
   
    public function __construct($url) {
        parent::__construct();
        
        $id = $url[1];
        
        new \teastore\model\admin\Lock($id);
        
        $this->model = new \teastore\model\admin\Users();
        
        
    }

    public function generateOutput(){
// instaniate the view and give it a title and model
        $Lock = new \teastore\view\admin\Users($this);
// generate the HTML page
        $Lock->page();
    }

    public function getTitle() {
        return '';
    }

}
