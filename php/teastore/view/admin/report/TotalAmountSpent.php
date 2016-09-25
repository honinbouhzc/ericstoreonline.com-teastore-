<?php
namespace teastore\view\admin\report;

class TotalAmountSpent extends \teastore\view\View{
    
    public function article() {
        $TotalAmountSpent = $this->model;
      ?>
          <nav class="row">
              <table class="table table-striped">  
                  <tr><td style="text-align: center">Member ID</td><td>Member First Name</td><td>Member Last Name</td><td>Total Amount Spent</td><td>Total Quantity Ordered</td></tr>   
            <?php          
            // execute the next function in the Categories object
             while ($TotalAmountSpent->next()) {
                ?> 
              <tr>
                  <td><?= $TotalAmountSpent->getMemberId() ?></td>
                  <td><?= $TotalAmountSpent->getMemberFirstName() ?></td>
                  <td><?= $TotalAmountSpent->getMemberLastName() ?></td>
                  <td><?= $TotalAmountSpent->getTotalAmountSpent() ?></td>
                  <td><?= $TotalAmountSpent->getTotalQuantityOrdered() ?></td>
                                            
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