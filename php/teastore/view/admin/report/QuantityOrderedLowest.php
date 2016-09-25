<?php
namespace teastore\view\admin\report;

class QuantityOrderedLowest extends \teastore\view\View{
    
    public function article() {
        $QuantityOrderedLowest = $this->model;
      ?>
          <nav class="row">
              <table class="table table-striped">  
                  <tr><td>Product ID</td><td>Product Name</td><td>Quantity Ordered</td></tr>   
            <?php          
            // execute the next function in the Categories object
             while ($QuantityOrderedLowest->next()) {
                ?> 
              <tr>
                  <td><?= $QuantityOrderedLowest->getProductID() ?></td>
                  <td><?= $QuantityOrderedLowest->getProductName() ?></td>
                  <td><?= $QuantityOrderedLowest->getQuantityOrder() ?></td>                                 
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