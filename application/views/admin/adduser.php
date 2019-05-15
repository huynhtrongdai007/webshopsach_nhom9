<?php  include"templates/header.php"; ?>
<div class="container">
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Username</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="username">
    </div>
    <div class="form-group col-md-6">
      <label>Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-row">
        <div class="form-group col-md-6">
      <label>Email</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
    <div class="form-group col-md-6">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
<?php include"templates/footer.php"; ?>