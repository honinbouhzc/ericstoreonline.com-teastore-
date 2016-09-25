<?php
namespace teastore\view\admin;

class Report extends \teastore\view\View{
    
    public function article() {
        
        ?>

<table class="table table-striped">
    <tr><td>Name</td><td>Click</td></tr>
    <tr><td>Quantity of Products Ordered by highest</td><td><a href="<?= PROJECT_URL ?>quantity-ordered-highest">View</a></td></tr>
    <tr><td>Quantity of Products Ordered by lowest</td><td><a href="<?= PROJECT_URL ?>quantity-ordered-lowest">View</a></td></tr>
    <tr><td>Customers to a state</td><td><a href="<?= PROJECT_URL ?>customer-state">View</a></td></tr>
    <tr><td>Total Amount Spent by customers</td><td><a href="<?= PROJECT_URL ?>total-amount-spent">View</a></td></tr>
    <tr><td>Monthly Sales</td><td><a href="<?= PROJECT_URL ?>monthly-salse">View</a></td></tr>
    <tr><td>Products in shopping cart not paid for</td><td><a href="<?= PROJECT_URL ?>products-in-cart-not-paid">View</a></td></tr>
    <tr><td>Quantity and price of Category</td><td><a href="<?= PROJECT_URL ?>quantity-price-of-category">View</a></td></tr>
    <tr><td>Order By Name</td><td><a href="<?= PROJECT_URL ?>order-by-name">View</a></td></tr>
    <tr><td>Customer Messages</td><td><a href="<?= PROJECT_URL ?>customer-message">View</a></td></tr>
</table> 

<a href="<?= PROJECT_URL ?>admin"><p>Return Dashboard Page</p></a>

<!--            
<div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="service-box wow bounceInDown" data-wow-delay="0.1s">
            <h4>Quantity of Products Ordered by highest</h4>
            <a class="btn btn-primary">Learn more</a>
        </div>        
    </div>
    
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="service-box wow bounceInDown" data-wow-delay="0.1s">
            <h4>Quantity of Products Ordered by lowest</h4>
            <a class="btn btn-primary">Learn more</a>
        </div>        
    </div>
    
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="service-box wow bounceInDown" data-wow-delay="0.1s">
            <h4>Customers to a state </h4>
            <a class="btn btn-primary">Learn more</a>
        </div>        
    </div>
    
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="service-box wow bounceInDown" data-wow-delay="0.1s">
            <h4>Total Amount Spent by customers </h4>
            <a class="btn btn-primary">Learn more</a>
        </div>        
    </div>   
</div>
        
<div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="service-box wow bounceInDown" data-wow-delay="0.1s">
            <h4>Monthly Sales </h4>
            <a class="btn btn-primary">Learn more</a>
        </div>        
    </div>
    
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="service-box wow bounceInDown" data-wow-delay="0.1s">
            <h4>Products in shoppingcart not paid for </h4>
            <a class="btn btn-primary">Learn more</a>
        </div>        
    </div>
    
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="service-box wow bounceInDown" data-wow-delay="0.1s">
            <h4>Quantity and price of Category</h4>
            <a class="btn btn-primary">Learn more</a>
        </div>        
    </div>
    
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="service-box wow bounceInDown" data-wow-delay="0.1s">
            <h4>Order By Name</h4>
            <a class="btn btn-primary">Learn more</a>
        </div>        
    </div>   
</div>
-->

<?php
    }
}