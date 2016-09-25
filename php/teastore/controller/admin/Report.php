<?php
namespace teastore\controller\admin;

class Report extends Admin{
   
    public function __construct() {
       parent::__construct();          
    }

    public function generateOutput() {
// instaniate the view and give it a title and model
        $Report = new \teastore\view\admin\Report($this);
// generate the HTML page
        $Report->page();
    }

    public function getTitle() {
        return "Reports";
    }

}
