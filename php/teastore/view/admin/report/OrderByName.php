<?php
namespace teastore\view\admin\report;

class OrderByName extends \teastore\view\View{
    
    public function article() {
        $OrderByName = $this->model;
      ?>
          <nav class="row">
              <table class="table table-striped">  
                  <tr><td>Product ID</td><td>Product Name</td><td>Product Category</td><td>Quantity Ordered</td><td>Total Price Sold</td></tr>   
            <?php          
            // execute the next function in the Categories object
             while ($OrderByName->next()) {
                ?> 
              <tr>
                  <td><?= $OrderByName->getProductID() ?></td>
                  <td><?= $OrderByName->getProductName()?></td>
                  <td><?= $OrderByName->getProductCategory() ?></td>
                  <td><?= $OrderByName->getQuantityOrdered() ?></td>
                  <td><?= $OrderByName->getTotalPriceSold() ?></td>
                
              </tr>
              
        <?php
            }
?>
              </table>
    </nav>
            <a href="<?= PROJECT_URL ?>report"><p>Return Report Page</p></a>

<?php
    }   
}