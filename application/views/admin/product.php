<?php 
    include'templates/header.php';

    include'templates/Modal_Product.php';
 ?>

<div class="container-fluid mt-5">
<h1 class="text-center display-4 color-tim">Danh Sách Sản Phẩm</h1>
<hr class="w-50 bg-primary">
<div class="ml-auto"><button type="button" class="btn btn-primary MainNavText" data-toggle="modal" data-target="#productModal" id="MainNavHelp">Add-product</button></div>

    <table id="product_data" class="table table-dark table-hover table-bordered table-striped">
    <thead>
    <table class="table table-dark table-hover table-striped">

    <thead class="name" >
        <th>STT</th>
        <th>ID</th>
        <th>Tên Sách</th>
        <th>giá</th>
        <th> Giảm giá </th>
        <th>Hình ảnh</th>
        <th>Update</th>
        <th>Delete</th>

    <table class="table table-dark table-hover table-striped" id="users">
    <thead class="name" >
        <th style="font-size: 15px">STT</th>
        <th style="font-size: 15px">ID</th>
        <th style="font-size: 15px">Tên Sách</th>
        <th style="font-size: 15px">Mô tả</th>
        <th style="font-size: 15px">giá</th>
        <th style="font-size: 15px"> Giảm giá </th>
        <th style="font-size: 15px">Hình ảnh</th>
        <th style="font-size: 15px">
            <button><a href="<?=base_url();?>sachController/addProduct">add</a></button>
        </th>

    </thead>

    <tbody>
         <?php $stt=1; ?>
        <?php foreach ($data as $product):?>
        <tr>
            <td><?= $stt;?></td>
            <td><?= $product->id;?></td>
            <td><?= $product->name;?></td>
            <td><?= number_format($product->unit_price);?></td>
            <td><?= number_format($product->promotion_price);?></td>
            <td><img src="<?=base_url();?>uploads/<?=$product->image;?>" width="80"></td>
            <td>
              <a href="#" class="btn btn-warning MainNavText" data-toggle="modal" data-target="#modal-update-product" data-whatever="<?php echo $product->id?>">update</a></td>
            <td><a href="#" class="btn btn-danger delete_data" id="<?=$product->id;?>">delete</a></td>
          <?php $stt++;?>
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
                  url:base_url+'sachController/Insert_Product',
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
    var base_url = "<?php echo base_url() ?>";
   $('#modal-update-product').on('shown.bs.modal', function (event) {
      var button = $(event.relatedTarget);// Button that triggered the modal
      var id = button.data('whatever');
      console.log(id);
   $('#modal-update-product #id_product').val(id);
   $.ajax({
             url: base_url+"SachController/Product_id/"+id,
             dataType:'json',
             success:function(datareturn)
             {
                console.log(datareturn);
                  $('#modal-update-product #id_product').val(datareturn.id);
                  $('#modal-update-product #name_product').val(datareturn.name);
                  $('#modal-update-product #description').val(datareturn.description);
                  $('#modal-update-product #unit_price').val(datareturn.unit_price);
                  $('#modal-update-product #promotion_price').val(datareturn.promotion_price);
                  $('#modal-update-product #unit').val(datareturn.unit);
                  $('#modal-update-product #image_0').attr("src",base_url+'./uploads/'+datareturn.image);
                  $('#modal-update-product #product_image').val(datareturn.image);
             },

        });

});
  $("#modal-update-product #book_id").click(function()
    {

  var form = new FormData($('#update-product_form')[0]);
  
  $.ajax({
          url:base_url+'SachController/Update_Product/',
          data:form, 
          type:"POST",
          processData: false,
          contentType: false,
          success:function(dataReturn)
          {
            $('#modal-update-product').modal("hide");
            setTimeout(function(){
              alert(datareturn);
              window.location.reload(true);
            },500);
      
        //return false;
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
