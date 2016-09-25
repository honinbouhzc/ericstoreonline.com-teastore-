<?php
namespace teastore\view;

class Categories extends View{
    
    public function article() {
        $categories = $this->model;
      ?>
          <article class="row" style="margin-top:50px;">
            <?php          
            // execute the next function in the Categories object
             while ($categories->next()) {
                ?>   
                <section class="col-md-2 col-sm-4 col-xs-12 text-center" > 
                    <a href="products/<?= $categories->getURL() ?>">
                        <img src="<?= IMAGE_URL . $categories->getImage() ?>" height='100px' style="border:5px solid gray;">
                        <p><?= $categories->getName() ?></p> 
                    </a>
                </section>
        <?php
            }
?>

 </article>   
<a href="<?= PROJECT_URL ?>home"><p style="margin-bottom:50px;margin-top:50px;">Return Home Page</p></a>

<?php
    }   
}


