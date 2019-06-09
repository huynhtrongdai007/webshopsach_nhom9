<?php include"templates/header.php";include"templates/modelFormUser.php"; ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 

<div class="container"> 
 <div class="row"> 
  <h1 class="text-center">Quản lí tài khoản </h1> 
  <div class="col-md-10 col-md-offset-1"> 
   <div class="panel panel-default panel-table"> 
    <div class="panel-heading"> 
     <div class="row"> 
      <div class="col col-xs-6"> 
       <h3 class="panel-title">Danh sách khách hàng</h3> 
      </div> 
      <div class="col col-xs-6 text-right"> 
       <button type="button" class="btn btn-sm btn-primary btn-create">Thêm mới</button> 
      </div> 
     </div> 
    </div> 
    <div class="panel-body"> 
     <table class="table table-striped table-bordered table-list"> 
      <thead> 
       <tr> 
        <th><em class="fa fa-cog"></em>
        </th> 
<th class="hidden-xs">Mã Số</th>      
         <th> tên</th> 
        <th>Email</th>
        <th>Số lượng </th> 
        <th>Gía tiền</th>
        <th>Số điện thoại</th>
  
        <!--  <th>Giới tính</th>
        <th>Địa chỉ</th>  -->
        </tr> 
      </thead> 
      <tbody><tr> 
	<?php 
			foreach ($data as $value):
	?> 
       <td align="center"><a class="btn btn-default ">
	<!-- sửa -->
	<em data-target="#edit-modal" class="fa fa-pencil"data-toggle="modal" class="MainNavText" data-whatever="<?php echo $value['id'] ?>" href="#"></em></a> 
	<!--//xóa  -->
	<a class="delete_users 	btn btn-danger">


		<em  class="fa fa-trash  " <?=$value['id'];?>	  ></em></a>
       </td> 
       <td class="hidden-xs"><?=$value['id'] ?></td> 
       <td><?=$value['Họ tên']?></td>
       <td><?=$value['Email']?></td> 
       <td><?=$value['Số lượng']?></td> 
       <td><?=$value['giá tiền']?></td>
       <td><?=$value['phone']?></td>
      </tr> 

           <?php 

			endforeach;
		    ?>  
     </tbody></table> 
<script type="text/javascript">
	var base_url = "<?php echo base_url() ?>";
	
	
	$('#edit-modal').on('shown.bs.modal', function (event) {
  
  var button = $(event.relatedTarget) ;// Button that triggered the modal
  var id = button.data('whatever');
  console.log(id);
  $('#edit-modal #user_id').val(id);
   $.ajax({
             url: base_url+"SachController/detail_user/"+id,
             dataType:'json',

             success: function(datareturn)
             {
                console.log(datareturn);
                $('#edit-modal #user_id').val(datareturn.id);
                $('#edit-modal #user_name').val(datareturn.Họ tên);
                $('#edit-modal #email').val(datareturn.email);
                $('#edit-modal #so_luong').val(datareturn.Số lượng);
               	$('#edit-modal #gia').val(datareturn.giá tiền);
              $('#edit-modal #phone').val(datareturn.phone);
             },

        });
});
  
	$("#edit-modal #submit").click(function()
{

  var form = new FormData($('#frm-edit-modal')[0]);
  
  $.ajax({
          url:base_url+'SachController/save',
          data:form, 
          type:"POST",
          processData: false,
          contentType: false,
          success:function(dataReturn)
          {
              $('#edit-modal').modal("hide");
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

<!-- xóa -->
 <script type="text/javascript">
            $(document).ready(function(){
                $('.delete_users').click(function(){
                    var id = $(this).attr("id");
                if (confirm("Bạn có chắc muốn xóa dòng dữ liệu này?")) {
                    window.location="<?= base_url();?>SachController/delete_dataadmin/"+id;  
                }else{
                    return false;
                }
                });       
            });
    </script>   
    </div> 

    <div class="panel-footer"> 	
     <div class="row"> 
     <!--  <div class="col col-xs-4">Trang  </div>  -->
      <div class="col col-xs-8"> 
       <ul class="pagination hidden-xs pull-right"> 
        <li><a href="<?=base_url();?>SachController/admin">«</a>
        </li> 
        <li><a href="<?=base_url();?>SachController/user">»</a>
        </li> 
        	
       </ul> 
       
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
 </div>
</div>


<?php include"templates/footer.php"; ?>