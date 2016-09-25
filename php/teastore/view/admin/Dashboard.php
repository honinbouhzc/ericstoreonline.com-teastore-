<?php
namespace teastore\view\admin;

class Dashboard extends \teastore\view\View{
    
    public function article() {
        ?>
         
                <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<i class="fa fa-database fa-4x"></i>
                                                <h4>Users'Data</h4>
						<a class="btn btn-primary"href="<?= PROJECT_URL ?>users">Learn more</a>
					</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<i class="fa fa-database fa-4x"></i>
						<h4>Products'Data</h4>			
						<a class="btn btn-primary"href="<?= PROJECT_URL ?>product-data">Learn more</a>
					</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<i class="fa fa-newspaper-o fa-4x"></i>
						<h4>Send Newsletter</h4>					
						<a class="btn btn-primary" href="<?= PROJECT_URL ?>newsletter">Learn more</a>
					</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<i class="fa fa-registered fa-4x"></i>
						<h4>Report</h4>						
						<a class="btn btn-primary" href="<?= PROJECT_URL ?>report">Learn more</a>
					</div>
                </div>
		 </div>

<?php
    }   
}

