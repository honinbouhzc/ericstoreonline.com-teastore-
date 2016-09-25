<?php
namespace teastore\view\admin;

class Users extends \teastore\view\View{
    
    public function article() {
        $users = $this->model;
      ?>
          <nav class="row">
              <table class="table table-striped">  
                  <tr><td>First Name</td><td>Last Name</td><td>Email</td><td>Status</td><td>Delete</td>
                      <td>Change Password</td><td>Lock</td>
                      <td><a href="<?= PROJECT_URL ?>newsletter">Newsletter</a></td> </tr>   
            <?php          
            // execute the next function in the Categories object
             while ($users->next()) {
                ?> 
              <tr>
                  <td><?= $users->getFirstName() ?></td>
                  <td><?= $users->getLastName() ?></td>
                  <td><?= $users->getEmail() ?></td>                 
                  <td><?= $users->getStatus() ?></td>  
                  <td><a href="<?= PROJECT ?>delete/<?= $users->getId() ?>">delete</a></td>
                  <td><a href="<?= PROJECT ?>change-password/<?= $users->getId() ?>">change password</a></td>
                  
                  <?php
                  if($users->islocked() == 1){ ?>
                  <td><a href="<?= PROJECT ?>lock/<?= $users->getId() ?>" >lock</a></td>
                  <?php }else if($users->islocked() == 0){  ?>
                  <td><a href="<?= PROJECT ?>lock/<?= $users->getId() ?>" >unlock</a></td>
                  <?php
                  }
                  ?>
                  
                  <td><?= ($users->isNewsletter())?"yes":"no" ?></td>
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