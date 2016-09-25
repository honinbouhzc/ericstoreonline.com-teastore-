<?php

namespace teastore\controller;

abstract class Controller {

    protected $model = null;
    protected $title;

    abstract public function generateOutput();
    
    abstract function getTitle();

    function getModel() {
        return $this->model;
    }

 
    function getError()
    {
       if($this->model)
        {
            return $this->model->getError();
        } 
       return ''; 
    }
}
