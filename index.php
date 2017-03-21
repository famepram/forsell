<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    	<title>FIXED ASSETS | DRAFT UI DEVELOPMENT</title>
    	
    	<?php include('inc/load_top.php');?>
	</head>
	<body cz-shortcut-listen="true">
		<nav class="navbar navbar-toggleable-lg navbar-inverse fixed-top bg-inverse">
			<button class="navbar-toggler navbar-toggler-left" aria-controls="sidebar-left" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="#">FIXED ASSETS</a>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a href=""><i class="zmdi zmdi-notifications"></i></a>
					</li>
					<li class="nav-item active">
						<a href=""><i class="zmdi zmdi-search"></i></a>
					</li>
					<li class="nav-item active">
						<a href=""><i class="zmdi zmdi-account-circle"></i></a>
					</li>
					<li class="nav-item active">
						<a href=""><i class="zmdi zmdi-more-vert"></i></a>
					</li>
					
				</ul>
<!-- 				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="text" placeholder="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form> -->
			</div>


		</nav>
		<div class="overlay sidebar-overlay"></div>
		<section>
			<aside id="sidebar-left" class="sidebar">
				<div class="user-info">
					<div class="image">
						<img class="rounded-circle" src="assets/img/alex.jpg" alt="">
					</div>
					<div class="info">
						<h5>Administrator</h5>
					</div>
				</div>
			</aside>
		</section>
		

	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    
  
		<?php include('inc/load_bottom.php');?>
	</body>
</html>