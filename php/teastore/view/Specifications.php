<?php
namespace teastore\view;

class Specifications extends View{
    
    public function article() {
        $product = $this->model;
        ?>
        <nav class="row" >
    

        <section class="col-md-4 col-sm-3"></section>
            <section class="col-md-4 col-sm-6 col-xs-12 text-center">          
                <img src="<?= IMAGE_URL . $product->getImage() ?>" height='480px'>
                    
                <h3>$<?= $product->getPrice() ?></h3>
                <p style="margin-bottom:50px;margin-top:50px;"><?= $product->getDescription() ?></p>
               <p><a href="<?= PROJECT_URL ?>cart/<?=$product->getCategoryURL().'/'.$product->getURL()?>" class ="btn btn-success">Add To Cart</a></p>
            </section> 
    </nav>
    <a href="<?= PROJECT_URL ?>categories"><p style="margin-bottom:50px;margin-top:50px;">Return Categories Page</p></a>
<?php
    }

}
