<?php 
	$this->load->view($header);
	$this->load->model("SachModel");
	$id=$_GET["id"];
	$data=$this->SachModel->SelectProduct($id);
	    
 ?>



<div class="container mt-5">
	<h1 class="text-center color-tim">Update Sản Phẩm</h1>
	<div class="form-add-product">
 	 <form action="<?=base_url();?>sachController/Updateproduct" method="POST" enctype="multipart/form-data">

 	 	<table id="table-add-product">
 	 		<?php 
				foreach ($data as $value){

		 	?>
 	 		 <tr>
 	 		 	<td>Name:</td>
 	 		 	<td>
 	 		 <input type="text" size="25" name="name_product" value="<?=$value['name']?>">
 	 		 	</td>
 	 		 </tr>
 	 		 <tr>
 	 		 	<td>Miêu Tả:</td>
 	 		 	<td><textarea  name="description"><?=$value['description']?></textarea></td>
 	 		 </tr>
 	 		 <tr>
 	 		 	<td>Giá:</td>
 	 		 	<td><input type="text" size="25" name="unit_price" value="<?=$value['unit_price']?>"></td>
 	 		 </tr>
 	 		 <tr>
 	 		 	<td>Giá Khuyến mãi:</td>
 	 		<td><input type="text" size="25" name="promotion_price" value="<?=$value['promotion_price']?>"></td>
 	 		 </tr>
 	 		 <tr>
 	 		 	<td>đơn vị:</td>
 	 		 	<td><input type="text" size="25" name="unit" value="<?=$value['unit']?>"></td>
 	 		 </tr>
 	 		 <tr>
 	 		 	<td>Ảnh Củ</td>
 	 		 	<td><img src="<?=base_url();?>./uploads/<?=$value['image']?>"></td>
 	 		 </tr>
 	 		 <tr>
 	 		 	<td>Hình ảnh:</td>
 	 		 	<td><input type="file" name="image"></td>
 	 		 </tr>
 	 		 <tr>
 	 		 	<td></td>
 	 		 	<td><input class="btn btn-success add-product" type="submit" name="insert" value="Update"></td>
 	 		 </tr>
 	 		 <?php } ?>
 	 		  <?php 
					if($this->uri->segment(2)=="insertedAddProduct") {
						echo '<p class="text-success text-center">Success</p>';
					}
				?>
 	 	</table>
 	 </form>
 </div>

</div>


 <?php 
 	$this->load->view($footer);
  ?>