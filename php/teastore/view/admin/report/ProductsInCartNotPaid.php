<?php
namespace teastore\view\admin\report;

class ProductsInCartNotPaid extends \teastore\view\View{
    
    public function article() {
        $ProductsInCartNotPaid = $this->model;
      ?>
          <nav class="row">
              <table class="table table-striped">  
                  <tr><td>Product ID</td><td>Product Name</td><td>Quantity in Cart</td><td>Member</td></tr>   
            <?php          
            // execute the next function in the Categories object
             while ($ProductsInCartNotPaid->next()) {
                ?> 
              <tr>
                  <td><?= $ProductsInCartNotPaid->getProductId() ?></td>
                  <td><?= $ProductsInCartNotPaid->getProductName()?></td>
                  <td><?= $ProductsInCartNotPaid->getQuantityinCart() ?></td>
                  <td><?= $ProductsInCartNotPaid->getMember() ?></td>
                
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