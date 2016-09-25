<?php
namespace teastore\view\admin\report;

class QuantityPriceOfCategory extends \teastore\view\View{
    
    public function article() {
        $QuantityPriceOfCategory = $this->model;
      ?>
          <nav class="row">
              <table class="table table-striped">  
                  <tr><td>Product Category</td><td>Quantity Sold</td><td>Total Amount Sold</td></tr>   
            <?php          
            // execute the next function in the Categories object
             while ($QuantityPriceOfCategory->next()) {
                ?> 
              <tr>
                  <td><?= $QuantityPriceOfCategory->getProductCategory() ?></td>
                  <td><?= $QuantityPriceOfCategory->getQuantitySold()?></td>
                  <td><?= $QuantityPriceOfCategory->getTotalAmountSold() ?></td>
                 
                
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