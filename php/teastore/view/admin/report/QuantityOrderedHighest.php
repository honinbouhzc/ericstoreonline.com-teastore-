<?php
namespace teastore\view\admin\report;

class QuantityOrderedHighest extends \teastore\view\View{
    
    public function article() {
        $QuantityOrderedHighest = $this->model;
      ?>
          <nav class="row">
              <table class="table table-striped">  
                  <tr><td style="text-align: center">Product ID</td><td>Product Name</td><td>Quantity Ordered</td></tr>   
            <?php          
            // execute the next function in the Categories object
             while ($QuantityOrderedHighest->next()) {
                ?> 
              <tr>
                  <td><?= $QuantityOrderedHighest->getProductID() ?></td>
                  <td><?= $QuantityOrderedHighest->getProductName() ?></td>
                  <td><?= $QuantityOrderedHighest->getQuantityOrder() ?></td>                                 
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