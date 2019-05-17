<div class="col-sm-12">
						<div class="beta-products-list">
							<h4 style="color: red ;font-family :sans-serifs ; font-size: 40px; background-color:#00ffff	">  Sản phẩm mới</h4>

							<div class="beta-products-details">
								
								<div class="clearfix"></div>
							</div>
							
							<div class="row">
								 <?php
									//echo "<pre>";									print_r($data);exit;
										foreach ($data as $value) {
										
							?>

								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="<?=base_url();?>uploads/<?=$value->image; ?>" width="150px" height="200px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"><?php echo $value->name; ?></p>
											<p class="single-item-price">
												<span><?php echo $value->unit_price;?></span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="<?=base_url();?>SachController/Product">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
						
									  <?php 
						        	}
						         ?>
		                            
							</div>
						
						</div> <!-- .beta-products-list -->

						
						
					   <br>
						<div class="beta-products-list">
							<h4 style="color: red ;font-family :sans-serifs ; font-size: 40px; background-color:#00ffff	">  Top sản  phẩm </h4>
							<div class="beta-products-details">
								
								<div class="clearfix"></div>
							</div>
							
							<div class="row">

								 <?php
									//echo "<pre>";									print_r($data);exit;
										foreach ($data as $value) {
										
							?>
                                     
								<div class="col-sm-3">
                                  <br>
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="<?=base_url();?>uploads/<?=$value->image; ?>" width="150px" height="200px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"><?php echo $value->name; ?></p>
											<p class="single-item-price">
												<span><?php echo $value->unit_price;?></span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="<?=base_url();?>SachController/Product">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
						
									  <?php 
						        	}
						         ?>
		                            
							</div>
						
						</div> <!-- .beta-products-list -->

						
						
					</div>