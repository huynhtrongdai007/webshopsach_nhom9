<?php include"templates/header.php"; ?>

<table class="table table-hover"> 
	<thead>
		<tr>
			<th>STT</th>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>Phone</th>
			<th>address</th>
		</tr>
		<tr>
			<tbody>
				
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><a href="<?=base_url();?>sachController/updateuser">update</a></td>
					<td><a href="<?=base_url();?>sachController/deleteuser">delete</a></td>
				</tr>

			</tbody>
		</tr>
	</thead>
</table>




<?php include"templates/footer.php"; ?>