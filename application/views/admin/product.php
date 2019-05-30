<?php 
    include'templates/header.php';
 ?>

<div class="container-fluid mt-5">
<h1 class="text-center display-4 color-tim">Danh Sách Sản Phẩm</h1>
<hr class="w-50 bg-primary">
    <table id="product_data" class="table table-dark table-hover table-bordered table-striped">
    <thead>
       
        <th>Tên Sách</th>
        <th>giá</th>
        <th> Giá khuến mãi</th>
        <th>Hình ảnh</th>
        <th>Update</th>
        <th>Delete</th>
           <!-- <td> <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#productModal">Add</button></td> -->

    </thead>
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
<script type="text/javascript" language="javascript">
 $(document).ready(function() {
    var dataTable = $('#product_data').DataTable({
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
