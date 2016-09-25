<?php
namespace teastore\view;

class Search extends View{
    
    public function article() {
      
    $products = $this->model;
    
    ?>

        <!-- Example row of columns -->
    <nav class="row" >
        <?php
        while ($products->next()) {
            ?>
            <section class="col-md-3 col-sm-6 col-xs-12 text-center"> 
                <a href="<?= PROJECT_URL ?>specifications/<?= $products->getURL() ?>">
                    <img src="<?= IMAGE_URL . $products->getImage() ?>" height='100px'>
                    <p><b><?= $products->getName() ?></b></p></a>
                <p>$<?= $products->getPrice() ?></p>
                <p><a href="<?= PROJECT_URL ?>cart/<?=$products->getCategoryURL().'/'.$products->getURL()?>" class ="btn btn-success">Add To Cart</a></p>
                
            </section>
               
            <?php
        }
        ?>
    </nav>    
     <a href="<?= PROJECT_URL ?>categories"><p>Return Categories Page</p></a>    
     <?php   
    }

}
