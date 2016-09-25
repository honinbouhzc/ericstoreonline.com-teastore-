<?php
namespace teastore\view;

class StaticPages extends View{
    
    public function article() {
     
        include(INCLUDES . "info/" .  $this->controller->getPageName() . ".php");

    }

}
