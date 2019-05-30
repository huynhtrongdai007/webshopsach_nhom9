<?php 
    include'templates/header.php';
 ?>

<div class="container-fluid mt-5">
<h1 class="text-center display-4 color-tim">Danh Sách Sản Phẩm</h1>
<hr class="w-50 bg-primary">
    <table class="table table-dark table-hover table-bordered table-striped" id="products">
    <thead class="name">
        <th>STT</th>
        <th>ID</th>
        <th>Tên Sách</th>
        <th>Mô tả</th>
        <th>giá</th>
        <th> Giákhuến mãi</th>
        <th>Hình ảnh</th>
        <th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add</button></th>

    </thead>
    <tbody>
         <?php $stt=1; ?>
        <?php foreach ($data as $product):?>
        <tr>
            <td><?= $stt; ?></td>
            <td><?= $product->id ?></td>
            <td><?= $product->name;?></td>
            <td><?= $product->description;?></td>
            <td><?= number_format($product->unit_price);?></td>
            <td><?= number_format($product->promotion_price);?></td>
            <td><img src="<?=base_url();?>uploads/<?=$product->image;?>" width="80"></td>
            <td><a class=" btn btn-warning text-white" href="<?=base_url();?>SachController/Updateproduct?id=<?=$product->id; ?>" >update</a></td>
            <td><a href="#" class=" btn btn-danger text-white delete_data" id="<?=$product->id;?>">delete</a></td>
        <?php $stt++; ?>
        </tr>
         
        <?php endforeach;?>
        
    </tbody>
</table>
</div>
<div id="productModal" class="modal fade">
    <div class="modal-dialog">
        <form method="POST" id="product_form" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                 <h4 class="modal-title text-center display-4">Add Product</h4>
                <div class="modal-body">
                    <label>Tên Sách</label>
                    <input type="text" name="name" id="name_product" class="form-control"><br/>
                    <label>Miêu tả</label>
                    <textarea name="description" id="description" class="form-control"></textarea><br/>
                    <label>Giá:</label>
                    <input type="text" name="unit_price" id="unit_price" class="form-control"><br/>
                    <label>Giá củ:</label>
                    <input type="text" name="promotion_price" id="promotion_price" class="form-control"><br/>
                    <label>Đơn vị:</label>
                    <input type="text" name="unit" id="unit" class="form-control"><br/>
                    <label>Hình ảnh:</label>
                    <input type="file"  name="product_image" id="product_image" class="form-control">
                </div>
                <div class="modal-footer">
            <input type="submit" name="action" value="Add" class="btn btn-primary" />
                <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div> 
        </form>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
   var dataTable = $('#products').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'SachController/fetch_product'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  

});

       
</script>
<?php
    include'templates/footer.php';
 ?>
