<?php
namespace teastore\view\admin\report;

class CustomerMessage extends \teastore\view\View{
    
    public function article() {
        $CustomerMessage = $this->model;
      ?>
          <nav class="row">
              <table class="table table-striped">  
                  <tr><td style="text-align: center">Name</td><td>Email</td><td>Subject</td><td>Message</td></tr>   
            <?php          
            // execute the next function in the Categories object
             while ($CustomerMessage->next()) {
                ?> 
              <tr>
                  <td><?= $CustomerMessage->getName() ?></td>
                  <td><?= $CustomerMessage->getCustomerEmail() ?></td>
                   <td><?= $CustomerMessage->getSubject() ?></td>
                   <td><?= $CustomerMessage->getMessage() ?></td>
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