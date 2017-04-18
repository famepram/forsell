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
		<?php include('inc/header.php');?>
		<?php include('inc/sidebar.php');?>
		<section class="content">
			<div class="header">
				<h1>Basic Form</h1>
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="#">Home</a></li>
				  <li class="breadcrumb-item"><a href="#">Forms</a></li>
				  <li class="breadcrumb-item active">Basic Form</li>
				</ol>
			</div>
			<div class="row clearfix">
				<div class="col-lg-6">
					<h5 class="mtb15">Basic Form</h5>
					<form> 
						<div class="form-group"> 
							<label for="exampleInputEmail1">Email address</label> 
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> 
						</div> 
						<div class="form-group"> 
							<label for="exampleInputPassword1">Password</label> 
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> 
							<p class="help-block">Example block-level help text here.</p> 
						</div> 
						<div class="checkbox"> 
							<label> <input type="checkbox"> Check me out </label> 
						</div> 
						<button type="submit" class="btn btn-default">Submit</button> 
					</form>
				</div>

				<div class="col-lg-6">
					<h5 class="m-t-lg with-border mtb15">Horizontal Form</h5>
					<form>
					    <div class="form-group row">
					      	<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
					      	<div class="col-sm-10">
					        	<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					      	</div>
					    </div>
					    <div class="form-group row">
					      	<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
					      	<div class="col-sm-10">
					        	<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
					      	</div>
					    </div>
					    <div class="form-group row">
				      		<div class="offset-sm-2 col-sm-10">
					        	<button type="submit" class="btn btn-primary">Sign in</button>
					      	</div>
					    </div>
					</form>
				</div>
			</div>
			<div class="row clearfix mt25">
				<div class="col-lg-12">
					<h5 class="mtb15">Inline Form</h5>
					<form class="form-inline">
					  	<label class="sr-only" for="inlineFormInput">Name</label>
					  	<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Jane Doe">

					  	<label class="sr-only" for="inlineFormInputGroup">Username</label>
					  	<div class="input-group mb-2 mr-sm-2 mb-sm-0">
						    <div class="input-group-addon">@</div>
						    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
					  	</div>

					  	<div class="form-check mb-2 mr-sm-2 mb-sm-0">
						    <label class="form-check-label">
						      <input class="form-check-input" type="checkbox"> Remember me
						    </label>
					  	</div>

					  	<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
			
			

		</section>
		

	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    
  
		<?php include('inc/load_bottom.php');?>
	</body>
</html>