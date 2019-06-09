 <div class="container">
	<h1>Catory Prodduct</h1>
	<div class="row">
		
			<?php 
			foreach ($dataprodut as $value):
				?>
			<div class="col-md-3 col-sm-6 col-xl-6">
				<div class="border-product">
					<div class="product">																																															
					<a href="#"><img src="<?=base_url();?>/uploads/<?=$value->image?>"></a>
					</div>
				</div>
				<div class="card">
					<p class="card-text"><?=$value->name?></p>
					<p>	vnđ</p>
					<button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></button>

					<button type="button" class="btn btn-primary">Mua</button>
				</div>
			</div>
			<?php 
				endforeach;
			 ?> 
			
		 
	</div>
</div>