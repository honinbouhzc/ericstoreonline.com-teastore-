<?php
namespace teastore\view\admin;

class ProductData extends \teastore\view\View{
    
    public function article() {
        $productData = $this->model;
      ?>
          <nav class="row">
              <table class="table table-striped">  
                  <tr><td>ID</td><td>Name</td><td>PRICE</td><td>CATEGORY</td><td>INSTOCK</td></tr>    
            <?php          
            // execute the next function in the Categories object
             while ($productData->next()) {
                ?> 
                  <tr> 
                  <td><?= $productData->getId() ?></td>
                  <td><?= $productData->getName() ?></td>                 
                  <td><?= $productData->getPrice() ?></td>  
                  <td><?= $productData->getCategoryUrl() ?></td>  
                  <td><?= $productData->getInstock() ?></td>  
              </tr>
        <?php
            }
?>
              </table>
    </nav>
<a href="<?= PROJECT_URL ?>admin"><p>Return Dashboard Page</p></a>
<?php
    }   
}