<?php $this->load->view($header);?>
<!-- My-Code -->

<div class="container">
	<h1 class="text-center text-danger mt-5 wow bounceInLeft">Nhóm 9</h1>
</div>

<!-- team -->
<hr class="bg-secondary"/>
<div class="container-fluid padding">
	<div class="row padding wow bounceInLeft">
		<div class="col-md-4">
			<div class="card">
				<div class="border-img"><img class="card-img-top wow flip" src="<?=base_url();?>./img/team/nhat.jpg"></div>
				<div class="card-body">
					<h4 class="card-title text-p">Mai Văn Minh Nhật</h4>
					<p class="card-text text-p">Mai Văn Minh Nhật là thành viên trong nhóm chuyên phụ trách công việc thiết kế giao diện trang chủ và trang admin </p>
				</div>
			</div>
		</div>
			<div class="col-md-4">
			<div class="card">
				<div class="border-img"><img class="card-img-top wow flip" src="<?=base_url();?>./img/team/son.jpg"></div>
				<div class="card-body">
					<h4 class="card-title">
						Lê Văn Sơn	
					</h4>
					<p class="card-text">Lê Văn Sơn thành viên trong nhóm công việc thiết kết giao diện và xử lý các chức năng cho WebSite</p>	
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card">
				<div class="border-img"><img class="card-img-top wow flip" src="<?=base_url();?>./img/team/tam.jpg"></div>
				<div class="card-body">
					<h4 class="card-title">
						Nguyễn Thành Tâm	
					</h4>
					<p class="card-text">Nguyễn Thành Tâm thành viên trong nhóm công việc phụ thiết kế giao diện cho trang chủ, admin và làm báo cáo</p>	
				</div>
			</div>
		</div>
	</div>
	<hr class="bg-warning" />
	<div class="container">
		<h1 class="display-4 text-center text-danger wow bounceInLeft ">Bộ Phận Hổ trợ</h1>
	</div>
	<div class="row padding wow bounceInRight">
				<div class="col-md-4">
			<div class="card">
				<div class="border-img"><img class="card-img-top wow flip" src="<?=base_url();?>./img/team/cuong.jpg"></div>
				<div class="card-body">
					<h4 class="card-title">
						Nguyễn Chí cường 	
					</h4>
					<p class="card-text">Nguyễn Chí cường thành viên trong nhóm công việc hỗ trợ thiết kế giao diện, nhập liệu và làm báo cáo</p>	
				</div>
			</div>
		</div>
			<div class="col-md-4">
			<div class="card">
				<div class="border-img"><img class="card-img-top wow flip" width="200" src="<?=base_url();?>./img/team/meo.jpg"></div>
				<div class="card-body">
					<h4 class="card-title">Huỳnh Trọng Đại</h4>
					<p class="card-text">Huỳnh Trọng Đại cộng việc: hỗ trợ bộ phần thiết kế giao diện và xử lý các chức năng cho website</p>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card">
				<div class="border-img"><img class="card-img-top wow flip" src="<?=base_url();?>./img/team/hoa.jpg"></div>
				<div class="card-body">
					<h4 class="card-title">
						Trần Thanh Hòa
					</h4>
					<p class="card-text">Trần Thanh Hòa thành viên trong nhóm công việc hổ trợ nhập liệu và làm báo cáo</p>	
				</div>
			</div>
		</div>
	</div>
</div>
	<?php $this->load->view($footer); ?>
	<script> new WOW().init(); </script>
	