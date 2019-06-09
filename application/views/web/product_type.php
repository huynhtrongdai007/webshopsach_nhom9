<?php  $this->load->view($header); ?>
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						 <?php foreach ($data as $value) 
						 {
      
                          ?>
                 <ul class="aside-menu">
							<li><a href=""><?php echo $value->name; ?></a></li>
							
						</ul>
						<?php
					}
					?>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
								
							<div class="beta-products-details">
																<div class="clearfix"></div>
							</div>

	                        
							<div class="row">
								  <?php $this->load->view($NewProducttype); ?>
								
							</div>
						</div> <!-- .beta-products-list -->
     <br>
						<div class="space50">&nbsp;</div>

						
							</div>
							<div class="row">
								<?php $this->load->view($Caory);?>
								 
							</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
<?php $this->load->view($footer); ?>
	<div class="copyright">
		<div class="container">
			<p class="pull-left">Privacy policy. (&copy;) 2014</p>
			<p class="pull-right pay-options">
				<a href="#"><img src="<?=base_url();?>assets/dest/images/pay/master.jpg" alt="" /></a>
				<a href="#"><img src="<?=base_url();?>assets/dest/images/pay/pay.jpg" alt="" /></a>
				<a href="#"><img src="<?=base_url();?>assets/dest/images/pay/visa.jpg" alt="" /></a>
				<a href="#"><img src="<?=base_url();?>assets/dest/images/pay/paypal.jpg" alt="" /></a>
			</p>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .copyright -->


	<!-- include js files -->
	<script src="<?=base_url();?>assets/dest/js/jquery.js"></script>
	<script src="<?=base_url();?>assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="<?=base_url();?>assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="<?=base_url();?>assets/dest/vendors/animo/Animo.js"></script>
	<script src="<?=base_url();?>assets/dest/vendors/dug/dug.js"></script>
	<script src="<?=base_url();?>assets/dest/js/scripts.min.js"></script>
	<script src="<?=base_url();?>assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?=base_url();?>assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="<?=base_url();?>assets/dest/js/waypoints.min.js"></script>
	<script src="<?=base_url();?>assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="<?=base_url();?>assets/dest/js/custom2.js"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
</body>
</html>
