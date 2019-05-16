<?php 
   $this->load->view($header);
 ?>



<div class="container">
	<div class="form-add-product">
 	 <form action="<?=base_url();?>sachController/InsertProduct" method="POST" enctype="multipart/form-data">

 	 	<table id="table-add-product">
 	 		 <tr>
 	 		 	<td>Name:</td>
 	 		 	<td><input type="text" size="25" name="name_product"></td>
 	 		 </tr>
 	 		 <tr>
 	 		 	<td>Miêu Tả</td>
 	 		 	<td><textarea name="description"></textarea></td>
 	 		 </tr>
 	 		 <tr>
 	 		 	<td>Giá</td>
 	 		 	<td><input type="text" size="25" name="unit_price"></td>
 	 		 </tr>
 	 		 <tr>
 	 		 	<td>Giá Khuyến mãi</td>
 	 		 	<td><input type="text" size="25" name="promotion_price" ></td>
 	 		 </tr>
 	 		 <tr>
 	 		 	<td>đơn vị</td>
 	 		 	<td><input type="text" size="25" name="unit" ></td>
 	 		 </tr>
 	 		 <tr>
 	 		 	<td>Hình ảnh</td>
 	 		 	<td><input type="file" name="image" placeholder="Tên sản phẩm"></td>
 	 		 </tr>
 	 		 <tr>
 	 		 	<td></td>
 	 		 	<td><input class="btn btn-success add-product" type="submit" name="insert" value="Add"></td>
 	 		 </tr>
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

 


			