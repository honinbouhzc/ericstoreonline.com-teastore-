<?php
namespace teastore\view;

abstract class View {
   
    private $title = '';
    protected $model = null;
    protected  $controller = null;


    public function __construct($controller) {    
       
        $this->controller = $controller;
        $this->title = $controller->getTitle();
        $this->model =  $controller->getModel();
        
    }
    
    protected function header(){
        include(INCLUDES . "header.php");
    }
	
	protected function menu(){
		include(INCLUDES . "menu.php");
	}
    
    protected function banner(){
        include(INCLUDES . "banner.php");
    }
    
    abstract public function article();

    protected function footer(){
        include(INCLUDES . "footer.php");
    }
  
    
public function page()
    {
        ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tea Store</title>
     <meta name="description" content="">
   <?php  $this->header() ?>
      </head>
  <body>
	<?php $this->menu() ?>
  <?php  $this->banner() ?>		
		
	
           <h1 style="margin-top:60px;"><?= $this->title ?></h1>         
	<!--	<article class="container"> -->
       <?php $this->article() ?>	
	<!--	</article> -->
	
	
  <?php  $this->footer() ?>
  </body> 	
</html>



<?php
    }
}
