<div id="new-modal" class="modal fade" role="dialog">
<div class="modal-dialog">
	<div class="modal-content">				
		<div class="modal-header">
			<a class="close" data-dismiss="modal">X</a>
			<h3 class ="modal-title">Add - New -User</h3>
		</div>				
		<div class="modal-body">

<form id="frm-new-modal" class="form-horizontal" role="form" method="post" action="index.php">
<div class="form-group">
<label for="name" class="col-sm-2 control-label">User Name</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="user_name" name="user_name"  >
</div>
</div>


<div class="form-group">
<label for="password" class="col-sm-2 control-label">Password</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="password" name="password" >
</div>
</div>

<div class="form-group">
<label for="email" class="col-sm-2 control-label">Email</label>
<div class="col-sm-10">
	<textarea class="form-control" rows="4" name="email" id='email'></textarea>
</div>
</div>

<div class="form-group">
<label for="phone" class="col-sm-2 control-label">Phone</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="phone" name="phone">
</div>
</div>
<div class="form-group">
<label for="adress" class="col-sm-2 control-label">Adress</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="adress" name="adress">
</div>
</div>


</form>
		</div>			
		<div class="modal-footer">
			<button class="btn btn-success" id="submit">Send</button>
			<a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
	</div>
</div>
</div>

<!-- edit form -->
<div id="edit-modal" class="modal fade" role="dialog">
<div class="modal-dialog">
	<div class="modal-content">				
		<div class="modal-header">
			<a class="close" data-dismiss="modal">X</a>
			<h3>Edit - Book</h3>
		</div>				
		<div class="modal-body">

<form id="frm-edit-modal" class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>sachController/save">
<div class="form-group">
<label for="user_id" class="col-sm-2 control-label">User ID</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="user_id" name="user_id" value="" readonly >
</div>
</div>


<div class="form-group">
<label for="user_name" class="col-sm-2 control-label">User Name</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="user_name" name="user_name" >
</div>
</div>
<div class="form-group">
<label for="password" class="col-sm-2 control-label"> Password</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="password" name="password" >
</div>
</div>



<div class="form-group">
<label for="email" class="col-sm-2 control-label">email</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="email" name="email">
</div>
</div>

<div class="form-group">
<label for="phone" class="col-sm-2 control-label">Phone</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="phone" name="phone">
</div>
</div>

<div class="form-group">
<label for="adress" class="col-sm-2 control-label">Adress</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="adress" name="adress">
</div>
</div>
<div class="form-group">
<label for="level" class="col-sm-2 control-label">Level</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="level" name="level">
</div>
</div>


</form>
		</div>			
		<div class="modal-footer">
			<button type="button" class="btn btn-success" id="submit">Send</button>
			<a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
	</div>
</div>
</div>
 <!-- edit model catory -->
<div id="edit-modal-catory" class="modal fade" role="dialog">
<div class="modal-dialog">
	<div class="modal-content">				
		<div class="modal-header">
			<a class="close" data-dismiss="modal">X</a>
			<h3>Edit - Catory</h3>
		</div>				
		<div class="modal-body">

<form id="frm-edit-modal-catory" class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>sachController/save_catory">
<div class="form-group">
<label for="cat_id" class="col-sm-2 control-label">Cat ID</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="cat_id" name="cat_id" value="" readonly >
</div>
</div>


<div class="form-group">
<label for="cat_name" class="col-sm-2 control-label">Cat Name</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="cat_name" name="cat_name" >
</div>
</div>
<div class="form-group">
<label for="description" class="col-sm-2 control-label"> Description</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="description" name="description" >
</div>
</div>


</form>
		</div>			
		<div class="modal-footer">
			<button type="button" class="btn btn-success" id="submit">Send</button>
			<a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
	</div>
</div>
</div>
 <!-- edit model catory -->
<!-- new catory -->
<div id="new-modal-catory" class="modal fade" role="dialog">
<div class="modal-dialog">
	<div class="modal-content">				
		<div class="modal-header">
			<a class="close" data-dismiss="modal">X</a>
			<h3>New - Catory</h3>
		</div>				
		<div class="modal-body">

<form id="frm-new-modal-catory" class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>sachController/save_catory">
<div class="form-group">
<label for="cat_name" class="col-sm-2 control-label">Cat Name</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="cat_name" name="cat_name" >
</div>
</div>

<div class="form-group">
<label for="description" class="col-sm-2 control-label"> Description</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="description" name="description" >
</div>
</div>


</form>
		</div>			
		<div class="modal-footer">
			<button type="button" class="btn btn-success" id="submit">Send</button>
			<a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
	</div>
</div>
</div>
<!-- new catory -->


<div id="delete-modal-catory" class="modal fade" role="dialog">
<div class="modal-dialog">
	<div class="modal-content">				
		<div class="modal-header">
			<a class="close" data-dismiss="modal">X</a>
			<h3>Delete - Catory</h3>
		</div>				
		<div class="modal-body">

<form id="frm-new-modal-catory" class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>sachController/save_catory">

<div class="form-group">
<label for="cat_id" class="col-sm-2 control-label">Cat Name</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="cat_id" name="cat_id" >
</div>
</div>


</form>
		</div>			
		<div class="modal-footer">
			<button type="button" class="btn btn-success" id="submit">Send</button>
			<a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
	</div>
</div>
</div>