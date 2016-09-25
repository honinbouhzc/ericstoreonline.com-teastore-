<?php
namespace teastore\view\admin;

class newsletter extends \teastore\view\View{
    
    public function article() {
        ?>
    
     <div class =" row">
    <?php
    if($this->controller->isEmailSent()){
        echo '<h3>Emails Sent</h3>';
    }else{
        echo'<h3>Emails not Sent</h3>';
    }
    ?>
</div> 
<a href="<?= PROJECT_URL ?>admin"><p>Return Dashboard Page</p></a>
<?php
    }
}

?>
