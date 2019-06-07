<div class="container">
	<h1 >New Prodduct</h1>
	<div class="row">
		<?php foreach ($newproduct as $value): ?>
		<div class="col-md-3 col-xl-6 col-sm-6">
			<div class="border-product">
				<div class="product">
				<a href="#"><img src="<?=base_url();?>uploads/<?=$value->image?>"></a>
				</div>
			</div>
			<div class="card">
					<h6 class="card-text display-5"><?=$value->name?></h5>
					<h6>Gía: <?=$value->unit_price?> vnđ</h6>
					<button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></button>
					<button type="button" class="btn btn-primary">Mua</button>
				</div>
		</div>
	<?php endforeach; ?>
	</div>
</div>
