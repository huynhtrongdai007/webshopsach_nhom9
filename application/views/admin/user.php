<?php include"templates/header.php"; 
    include"templates/modelFormUser.php";?>

<table class="table table-hover table-responsive"> 
  <thead>
    <tr>
      <th>STT</th>
      <th>Username</th>
      <th>Email</th>
      <th>Password</th>
      <th>Phone</th>
      <th>address</th>
      <th>Level</th>
      <th class="active"><a data-target="#new-modal" data-toggle="modal" class="MainNavText" id="MainNavHelp" 
       href="#"></a></th>
      
    </tr>
    <?php foreach ($data as $value) {
      
    ?>
    <tr>
      <tbody>
        
        <tr>
          <td><?=$value['id'] ?></td>
          <td><?=$value['full_name']?></td>
          <td><?=$value['email']?></td>
          <td><?=$value['password']?></td>
          <td><?=$value['phone']?></td>
          <td><?=$value['address']?></td>
          <td><?=$value['level']?></td>
          <td> <a data-target="#edit-modal" data-toggle="modal" class="MainNavText" data-whatever="<?php echo $value['id'] ?>" href="#">Update</a></td>
          <td><a class= "delete_users" href="#" id="<?=$value['id'];?>" >delete</a></td>
      
        </tr>

      </tbody>
    </tr>
    <?php
      }
    ?>
  </thead>
</table>




<?php include"templates/footer.php"; ?>
<script type="text/javascript">
  var base_url = "<?php echo base_url() ?>";
  
  
  $('#edit-modal').on('shown.bs.modal', function (event) {
  
  var button = $(event.relatedTarget) ;// Button that triggered the modal
  var id = button.data('whatever') ;
  console.log(id);
  $('#edit-modal #user_id').val(id);
   $.ajax({
             url: base_url+"sachController/detail_user/"+id,
             dataType:'json',

             success: function(datareturn)
             {
                console.log(datareturn);
                $('#edit-modal #user_id').val(datareturn.id);
                $('#edit-modal #user_name').val(datareturn.full_name);
                $('#edit-modal #password').val(datareturn.password);
                $('#edit-modal #email').val(datareturn.email);
                $('#edit-modal #adress').val(datareturn.address);
                $('#edit-modal #phone').val(datareturn.phone);
                $('#edit-modal #level').val(datareturn.level);
             },

        });
});
  
  $("#edit-modal #submit").click(function()
{

  var form = new FormData($('#frm-edit-modal')[0]);
  
  $.ajax({
          url:base_url+'sachController/save',
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
 <script type="text/javascript">
            $(document).ready(function(){
                $('.delete_users').click(function(){
                    var id = $(this).attr("id");
                if (confirm("Bạn có chắc muốn xóa dòng dữ liệu này?")) {

                    window.location="<?= base_url();?>SachController/delete_datauser/"+id;    
                }else{
                    return false;
                }
                });       
            });
    </script>   
