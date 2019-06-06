<?php 
    include'templates/header.php';
    include'templates/Modal_Product.php'
 ?>

<div class="container mt-5">
<h1 class="text-center display-4 color-tim">Danh Sách Sản Phẩm</h1>
<hr class="w-50 bg-primary">
<div class="ml-auto"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add-product</button></div>

    <table id="product_data" class="table table-dark table-hover table-bordered table-striped">
    <thead>
    <table class="table table-dark table-hover table-striped" id="users">
    <thead class="name">

        <th>Tên Sách</th>
        <th>giá</th>
        <th> Giá khuến mãi</th>
        <th>Đơn Vị</th>
        <th>Hình ảnh</th>
        <th>Update</th>
        <th>Delete</th>
    </thead>
    </thead>
    <tbody>
         <?php $stt=1; ?>
        <?php foreach ($data as $product):?>
        <tr>
            <td><?= $stt;?></td>
            <td><?= $product->name;?></td>
            <td><?= number_format($product->unit_price);?></td>
            <td><?= number_format($product->promotion_price);?></td>
            <td><img src="<?=base_url();?>uploads/<?=$product->image;?>" width="80"></td>
            <td><a class=" btn btn-primary" href="<?=base_url();?>SachController/Updateproduct?id=<?=$product->id; ?>" >update</a></td>
            <td><a href="#" class=" btn btn-primary delete_data" id="<?=$product->id;?>">delete</a></td>
        <?php $stt++; ?>
        </tr>
         
        <?php endforeach;?>
        
    </tbody>
</table>
 <script type="text/javascript">
            $(document).ready(function(){
                $('.delete_data').click(function(){
                    var id = $(this).attr("id");
                if (confirm("Bạn có chắc muốn xóa dòng dữ liệu này?")) {
                    window.location="<?= base_url();?>SachController/delete_data/"+id;    
                }else{
                    return false;
                }
                });       
            });
    </script>   
</div>



<script type="text/javascript" language="javascript">
        var base_url = "<?php echo base_url() ?>";

    /*them san pham*/
    $('#productModal').on('shown.bs.modal', function (event) {
                var button = $(event.relatedTarget) ;

         var extension = $('#product_image').val().split('.').pop().toLowerCase();  
           if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
           {  
                alert("Invalid Image File");  
                $('#product_image').val('');  
                return false;  
           }  
         $("#product_form #submit").click(function()
        {

          var form = new FormData($('#productModal')[0]);
          
    });

     
          $.ajax({
                  url:base_url+'SachController/Insert_Product',
                  data:form, 
                  type:"POST",
                  processData: false,
                  contentType: false,
                  success:function(dataReturn)
                  {
                      $('#productModal').modal("hide");
                      setTimeout(function(){  
                        alert(dataReturn);
                        window.location.reload(true);
                      }, 500);

            },
            error: function(xhr, status, error) 
                    {
                        var err = eval("(" + xhr.responseText + ")");
                        alert(err.Message);
                    }
          });
    });
    
    
</script>
<script type="text/javascript">
    /*Delete_Product*/
      $(document).ready(function(){  
         
           $('.delete_data').click(function(){  
                var id = $(this).attr("id");  
                if(confirm("Are you sure you want to delete this?"))  
                {  
            
                   $.ajax({
                              url:base_url+'SachController/Delete_data/'+id,
                              data:{id:id},
                              type:"POST",
                              processData: false,
                              contentType: false,
                              success:function(dataReturn)
                              {
                                  setTimeout(function(){  
                                    alert(dataReturn);
                                     window.location.reload(true);                            
                                  }, 500);

                        },

                        error: function(xhr, status, error) 
                                {
                                    var err = eval("(" + xhr.responseText + ")");
                                    alert(err.Message);
                                }
                      });


                }  
                else  
                {  
                     return false;  
                }  
           });  
      });
</script>
<?php
    include'templates/footer.php';
 ?>
