<div class="container">
	<h1>List Prodduct</h1>
	<div class="row">
		
			<?php 
			foreach ($data as $value):
				?>
			<div class="col-md-3 col-sm-6 col-xl-6">
				<div class="border-product">
					<div class="product">
					<a href="#"><img src="<?=base_url();?>/uploads/<?=$value->image?>"></a>
					</div>
				</div>
				<div class="card">
					<p class="card-text"><?=$value->name?></p>
					<p>Gía: <?=$value->unit_price?> vnđ</p>
					<a href=""><i class="fas fa-shopping-cart"></i></a>
					<button type="button" class="btn btn-primary">Mua</button>
				</div>
			</div>
			<?php 
				endforeach;
			 ?>
			
		 
	</div>
</div>
