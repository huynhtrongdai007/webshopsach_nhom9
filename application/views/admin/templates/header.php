<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/bootstrap/css/style.css">
  <script type="text/javascript" src="<?=base_url();?>jquery/script.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
  <div class="navbar navbar-expand-md nav-link bg-light sticky-top">
    <nav class="container-fluid">
        <a class="navbar-brand" href="#">
            <img class="avatar mr-3" src="<?=base_url();?>img/meo.jpg" height="50">
            <h4 class="mt-3">Kimdaihuynh</h4>  
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarReponsive">  
                <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarReponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url();?>sachController/admin">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
   </nav>
</div>