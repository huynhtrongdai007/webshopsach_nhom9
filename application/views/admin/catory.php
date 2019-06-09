	<?php 
	    include'templates/header.php';
	    include"templates/modelFormUser.php";
	 ?>

	<div class="container-fluid mt-5">
	<h1 class="text-center display-4 color-tim">Danh Sách Chuyên Mục</h1>
	<hr class="w-50 bg-primary">
	    <table class="table table-dark table-hover table-striped" id="users">
	    <thead class="name">
	    	<th>STT</th>
	        <th>ID</th>
	        <th>Name</th>
	        <th>Desciption</th>
	        <th><a data-target="#new-modal-catory" data-toggle="modal" class="MainNavText" id="MainNavHelp" 
	       href="#">Thêm Danh Muc</a></th>

	    </thead>
	    <tbody>
	         <?php $stt=1; ?>
	        <?php foreach ($data as $value):?>
	        <tr>
	            <td><?= $stt; ?></td>
	            <td><?= $value->id ?></td>
	            <td><?= $value->name?></td>
	            <td><?= $value->description?></td>
	            <td><a data-target="#edit-modal-catory" data-toggle="modal" class="MainNavText" data-whatever="<?php echo $value->id?>" href="#">Update</a></td>
	            <td><a data-target="#delete-modal-catory" data-toggle="modal" class="MainNavText" data-whatever="<?php echo $value->id?>" href="#">delete</a></td>
	        <?php $stt++; ?>
	        </tr>
	         
	        <?php endforeach;?>
	        
	    </tbody>
	</table>

	</div>

	<script type="text/javascript">
		var base_url = "<?php echo base_url() ?>";
		
		
		$('#edit-modal-catory').on('shown.bs.modal', function (event) {
	  
			  var button = $(event.relatedTarget) ;// Button that triggered the modal
			  var id = button.data('whatever');
			  $('#edit-modal-catory #cat_id').val(id);
			   $.ajax({
			             url: base_url+"sachController/detail_catory/"+id,
			             dataType:'json',
			             success: function(datareturn)
			             {
			                console.log(datareturn);
			                $('#edit-modal-catory #cat_id').val(datareturn.id);
			                $('#edit-modal-catory #cat_name').val(datareturn.name);
			                $('#edit-modal-catory #description').val(datareturn.description);

	             },

	        });
	});
	  
		$("#edit-modal-catory #submit").click(function()
	{

	  var form = new FormData($('#frm-edit-modal-catory')[0]);
	  
	  $.ajax({
	          url:base_url+'sachController/save_catory',
	          data:form, 
	          type:"POST",
	          processData: false,
	          contentType: false,
	          success:function(dataReturn)
	          {
	              $('#edit-modal-catory').modal("hide");
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

		$('#new-modal-catory').on('shown.bs.modal', function (event) {
		var button = $(event.relatedTarget) ;// Button that triggered the modal
	});

		$("#new-modal-catory #submit").click(function()
		{

		  var form = new FormData($('#frm-new-modal-catory')[0]);
		  
		  $.ajax({
		          url:base_url+'sachController/new_catory',
		          data:form, 
		          type:"POST",
		          processData: false,
		          contentType: false,
		          success:function(dataReturn)
		          {
		              $('#new-modal-catory').modal("hide");
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



	$('#delete-modal-catory').on('shown.bs.modal', function (event) {
	var button = $(event.relatedTarget) ;// Button that triggered the modal
	  var id = button.data('whatever') ;
	  $('#delete-modal-catory #cat_id').val(id);

		  $("#delete-modal-catory #submit").click(function()
		{
		  
		  $.ajax({
		          url:base_url+'sachController/delete_Catory/'+id,
		          //data:form, 
		          type:"POST",
		          processData: false,
		          contentType: false,
		          success:function(dataReturn)
		          {
		              $('#delete-modal-catory').modal("hide");
		              setTimeout(function(){  
		                alert(dataReturn);
		                window.location.reload(true);
		              }, 500);

		    },
		    
		  });
		});
	});


	</script>
	 <?php 
	    include'templates/footer.php';
	 ?>