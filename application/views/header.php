<!DOCTYPE html>
<html lang="es">
<head>
	<title><?php echo $title;?></title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap-theme.css'?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<script>
		var baseUrl = "<?php echo base_url();?>";
	</script>
	<!-- header -->
	<!--<div class="container">
		<div class="row nav-header">
			<div class="col-md-2 col-md-offset-7">
				<div class="nav-item text-center">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>Ingresar
				</div>
			</div>
			<div class="col-md-2">
				<div class="nav-item text-center">
					<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					Contactenos
				</div>
			</div>
			<div class="col-md-1">
				<div class="nav-item text-center">
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
				</div>
			</div>
		</div>
	</div>-->
	<nav class="navbar navbar-default">
		<div class="container">
			  <div class="container-fluid">
			  	<!-- Brand and toggle get grouped for better mobile display -->
			  	   <div class="navbar-header">
			  	     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			  	       <span class="sr-only">Toggle navigation</span>
			  	       <span class="icon-bar"></span>
			  	       <span class="icon-bar"></span>
			  	       <span class="icon-bar"></span>
			  	     </button>
			  	   </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav">
			        <li class="col-sm-2 col-sm-offset-7">
		        			<a class="nav-item text-center" href="<?php echo base_url().'login'?>">
		        				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
		        				Ingresar
		        			</a>
			        </li>

			        <li class="col-sm-2">
			        	<a class="nav-item text-center">
		        				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
		        				Contactenos
		        		</a>
			        </li>

			        <li class="col-sm-1">
		        		<a class="nav-item text-center">
		        			<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
		        		</a>
			        </li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
		  </div>
	</nav>
	
	<div class="container-slide">

		<div class="col-xs-5 mask">
			<img src="<?php echo base_url().'assets/img/mask-header.png'?>" class="img-mask">
		</div>

		<div class="col-xs-10 col-xs-offset-1  col-md-8 col-md-offset-2  filter-header">
			<div class="col-xs-12 col-md-4 col-md-offset-1">
				<select class="form-control input-header">
					<option class="selected disabled">Tipo de busqueda</option>
					<option>Producto</option>
					<option>Negocio</option>
					<option>Tipo de negocio</option>
				</select>
			</div>
			<div class="col-xs-10 col-md-5 none-padding-right">
				<div class="form-group">
				   <input type="text" class="form-control input-header" id="filter" placeholder="¿Que buscas?">
				 </div>
			</div>
			<div class="col-xs-1 none-padding">
				<button class="search" type="submit">
					<img src="<?php echo base_url().'assets/img/search.png'?>">
				</button>
			</div>
		</div>

		<div class="slide-header">
			<!--<div class="item">
				<div class="item"><img src="<?php echo base_url().'assets/img/slide-1.jpg'?>"></div>
			</div>
			
			<div class="item">
				<div class="item"><img src="<?php echo base_url().'assets/img/slide-2.jpg'?>"></div>
			</div>

			<div class="item">
				<div class="item"><img src="<?php echo base_url().'assets/img/slide-3.jpg'?>"></div>
			</div>

			<div class="item">
				<div class="item"><img src="<?php echo base_url().'assets/img/slide-4.jpg'?>"></div>
			</div>-->

			<div class="item">
				<div class="item"><img src="<?php echo base_url().'assets/img/slide-header1.jpg'?>"></div>
			</div>
			<div class="item">
				<div class="item"><img src="<?php echo base_url().'assets/img/slide-header1.jpg'?>"></div>
			</div>
			<div class="item">
				<div class="item"><img src="<?php echo base_url().'assets/img/slide-header1.jpg'?>"></div>
			</div>
			<div class="item">
				<div class="item"><img src="<?php echo base_url().'assets/img/slide-header1.jpg'?>"></div>
			</div>
			<div class="item">
				<div class="item"><img src="<?php echo base_url().'assets/img/slide-header1.jpg'?>"></div>
			</div>
			
		</div>
	</div>
	
