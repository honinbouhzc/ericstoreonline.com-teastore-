<?php
namespace teastore\view\admin\report;

class MonthlySales extends \teastore\view\View{
    
    public function article() {
        $MonthlySales = $this->model;
      ?>
          <nav class="row">
              <table class="table table-striped">  
                  <tr><td>Month Number</td><td>Year</td><td>Amount of Sales</td><td>Monthly Total</td></tr>   
            <?php          
            // execute the next function in the Categories object
             while ($MonthlySales->next()) {
                ?> 
              <tr>
                  <td><?= $MonthlySales->getMonthNumber() ?></td>
                  <td><?= $MonthlySales->getYear()?></td>
                  <td><?= $MonthlySales->getAmountofSales() ?></td>
                  <td><?= $MonthlySales->getMonthlyTotal() ?></td>
                
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