<?php 
	include"templates/header.php";
 ?>
<div class="container mt-5">
    <h1 class="text-center">Administrator</h1>
    <hr class="bg-warning" />
</div>
<div class="container">
     <div class="row">
        <div class="col-md-12">        
             <div class="khung">
                <a href="<?=base_url();?>sachController/user">
                     <div class="select">
                     <i class="fas fa-users"></i>
                 </div>
                </a>
                 <p>User</p>
             </div>
              <div class="khung">
                 <a href="<?=base_url();?>sachController/product">
                     <div class="select">
                     <i class="fas fa-book"></i>
                 </div>
                 </a>
                 <p>Product</p>
             </div>    
              <div class="khung">
                 <a href="#">
                     <div class="select">
                     <i class="fas fa-cogs"></i>
                 </div>
                 </a>
                 <p>Admin</p>
             </div>    
              <div class="khung">
                 <a href="#">
                     <div class="select">
                     <i class="fas fa-cubes"></i>
                 </div>
                 </a>
                 <p>Categoty</p>
             </div>    
              <div class="khung">
                 <a href="#">
                     <div class="select">
                     <i class="fas fa-shopping-cart"></i>
                 </div>
                 </a>
                 <p>Cart</p>
             </div>    
              <div class="khung">
                <a href="#">
                     <div class="select">
                     <i class="far fa-newspaper"></i>
                 </div>
                </a>
                 <p>News</p>
             </div>    
              <div class="khung">
                 <a href="#">
                     <div class="select">
                     <i class="fas fa-heart"></i>
                 </div>
                 </a>
                 <p>Order</p>
             </div>    
              <div class="khung">
                 <a href="#">
                     <div class="select">
                     <i class="fas fa-upload"></i>
                 </div>
                 </a>
                 <p>publisher</p>
             </div>    
              <div class="khung">
                 <a href="#">
                     <div class="select">
                     <i class="fas fa-users"></i>
                 </div>
                 </a>
                 <p>publisher</p>
             </div>              
        </div>
    </div>
</div>
<?php 
	include'templates/footer.php';
 ?>