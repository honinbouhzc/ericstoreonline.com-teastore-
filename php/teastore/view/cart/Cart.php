<?php

namespace teastore\view\cart;

class Cart extends \teastore\view\View {

    protected $editable = true;

    public function article() {

        
        $model = $this->model;
        
        if (!\teastore\model\cart\Cart::isCart()) {
            echo "<h2 id='title' class='container text-center page-heading'>Your cart is empty</h2>";
        } else {

            $this->displayCart($model);
        }
    }

    public function displayCart($model) { {
            ?>
            <h2 id='title' class="container text-center page-heading" ><img src="<?= IMAGE_URL ?>shop_cart.png" /></h2>
            <article class="container" style="margin-bottom:50px;margin-top:50px;">
                <div class="row col-md-6 col-md-offset-3">
                    <table  class="table table-striped" style="margin-bottom:50px;">
                        <tr>
            <?php
            if ($this->editable) {
                echo "<th>delete</th>";
            }
            ?>

                            <th>image</th><th>name</th>
                            <th>price</th><th>quantity</th><th>subtotal</th><tr>
                        <tr> 
                            <?php
                            while ($model->nextProduct()) {
                                ?>
                            <tr>
                                <?php if ($this->editable) { ?>
                                    <td>
                                        <a href="<?= PROJECT_URL ?>cart/<?= $model->getSpecificationURL() ?>/0">
                                            <div class="btn btn-sm btn-danger">delete</div>
                                        </a>
                                    </td>
                                <?php } ?>
                                <td>
                                    <img src='<?= IMAGE_URL . $model->getImage() ?>' width='100px' height='100px'>
                                </td>

                                <td><?= $model->getName() ?></td>

                                <td align="right">$<?= number_format($model->getPrice(), 2) ?></td>

                                <td style="text-align:center">
                                    <?php
                                    if ($model->stockExceeded()) {
                                        echo "<p style='color:red'> " . $model->getInStock() . " instock</p>";
                                    }
                                    if ($this->editable) {
                                        ?>
                                        <input type='text' 
                                               class="quantity" 
                                               value='<?= $model->getQuantity() ?>' 
                                               id="<?= $model->getSpecificationURL() ?>" 
                                               style="text-align:right;width:2em"
                                               />
                                               <?php
                                           } else {

                                               echo "<span style='text-align:right;width:2em' />" . $model->getQuantity() . "</span>";
                                           }
                                           ?>    

                                </td><td align='right'>$<?= $model->getFormattedSubtotal() ?></td></tr>

                            <?php
                        }
                        ?>

                        <tr>
                            <?php
                            if ($this->editable) {
                                ?>    
                                <td>
                                    <a href="<?= PROJECT_URL ?>cart/delete-all"> 
                                        <div class="btn btn-sm btn-danger">delete all</div>
                                    </a>
                                </td>
                            <?php } ?>
                            <td colspan="4" align="right">total</td><td style="color:brown;text-align:right" >
                                $<?= $model->getFormattedTotal() ?></td></tr>        
                    </table> 
                </div>
                <?php
            }
            
            if ($this->editable) {
                $displayCheckout = ($model->cartExceedsStock()) ? "none" : "inline";
                $displaySignin = (\teastore\model\security\SignIn::isSignedIn()) ? "none" : "inline";
                $displayCheckout = (\teastore\model\security\SignIn::isSignedIn()) ? $displayCheckout : "none";
               
        //        $displaySignin = "none";
         //       $displayCheckout = "inline";
                ?>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="col-md-2"></div>
                        <a href='<?= PROJECT_URL . 'categories' ?>' class="btn btn-success col-md-3 text-center">continue</a>
                        <div class="col-md-2"></div>

                        <a id='continue' href='<?= PROJECT_URL . 'checkout' ?>' class="btn btn-success col-md-3" style='display:<?= $displayCheckout ?>'>checkout</button></a>

                        <a href='<?= PROJECT_URL . 'sign-in' ?>'  class="btn btn-success col-md-3"  style='display:<?= $displaySignin ?>' >sign in to checkout</a>
                        <div class="col-md-2"></div>    
                    </div>
                </div>

            </article>
            <script type="text/javascript">

                $(document).ready(function()
                {
                    $('.quantity').on('change',function(event)
                    {
                        quantity = this.value.trim();
                        id = this.id;
                        location.replace('<?= PROJECT_URL ?>cart/' + id + '/' + quantity);
                    }    
                ); 
                });
         
            </script>
            <?php
        }
    }



}


