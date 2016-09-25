<?php
namespace teastore\view\admin\report;

class CustomState extends \teastore\view\View{
    
    public function article() {
        $CustomState = $this->model;
      ?>
          <nav class="row">
              <table class="table table-striped">  
                  <tr><td style="text-align: center">State</td><td>Number of Customers</td></tr>   
            <?php          
            // execute the next function in the Categories object
             while ($CustomState->next()) {
                ?> 
              <tr>
                  <td><?= $CustomState->getState() ?></td>
                  <td><?= $CustomState->getNumberofCustomers() ?></td>
                                            
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