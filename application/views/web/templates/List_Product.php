					<div class="space50">&nbsp;</div>
						<div class="beta-products-list">
							<h4>Top Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<?php foreach ($data as $value):?>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="<?=base_url();?>./uploads/<?=$value->image?>" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"><?=$value->name?></p>
											<p class="single-item-price">
												<span><?=number_format($value->unit_price);?></span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="<?=base_url();?>Index/Product/<?=$value->id;?>">Details<i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
							</div>		
							</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->
			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
				</div>
				<div class="card">
					<p class="card-text"><?=$value->name?></p>
					<p>Gía: <?=$value->unit_price?> vnđ</p>
					<button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></button>

					<button type="button" class="btn btn-primary">Mua</button>
				</div>
			</div>
			<?php 
				endforeach;
			 ?> 
	</div>
</div>