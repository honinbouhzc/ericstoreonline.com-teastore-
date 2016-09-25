<?php
namespace teastore\view;

class Products extends View{
    
    public function article() {
      
    $products = $this->model;
    
    ?>
		<p style="margin:auto;width:900px;margin-bottom:50px;margin-top:50px;"><?= $products->getDescription() ?></p><br/>
        <!-- Example row of columns -->
    <nav class="row" >
        <?php
        while ($products->next()) {
            ?>
            <section class="col-md-3 col-sm-6 col-xs-12 text-center"> 
                <a href="<?= PROJECT_URL ?>specifications/<?= $products->getURL() ?>">
                    <img src="<?= IMAGE_URL . $products->getImage() ?>" height='240px' style="border:10px solid gray;">
                    <p><b><?= $products->getName() ?></b></p></a>
                <p>$<?= $products->getPrice() ?></p>
                <p><a href="<?= PROJECT_URL ?>cart/<?=$products->getCategoryURL().'/'.$products->getURL()?>" class ="btn btn-success">Add To Cart</a></p>
                
            </section>
               
            <?php
        }
        ?>
    </nav>    
     <a href="<?= PROJECT_URL ?>categories"><p style="margin-bottom:50px;margin-top:50px;">Return Categories Page</p></a>    
     <?php   
    }

}
