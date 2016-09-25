<?php
namespace teastore\controller\admin;

class Dashboard extends Admin{
   
    public function __construct() {
       parent::__construct();          
    }

    public function generateOutput() {
// instaniate the view and give it a title and model
        $Dashboard = new \teastore\view\admin\Dashboard($this);
// generate the HTML page
        $Dashboard->page();
    }

    public function getTitle() {
        return "Admin Dashboard";
    }

}
