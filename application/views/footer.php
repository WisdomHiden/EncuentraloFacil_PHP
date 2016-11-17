
<div class="contaier-fluid">
	<div class="bg-footer">
		<img src="<?php echo base_url().'assets/img/bg-footer1.png'?>">
	</div>
</div>

<div class="contaier-fluid footer">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-md-offset-2 item-footer">
				<ul>
					<li><a href="">Boton Item 1</a></li>
					<li><a href="">Boton Item 2</a></li>
					<li><a href="">Boton Item 3</a></li>
				</ul>
			</div>

			<div class="col-md-3 item-footer">
				<ul>
					<li><a href="">Boton Item 4</a></li>
					<li><a href="">Politica de privacidad</a></li>
					<li><a href="">Terminos y condiciones</a></li>
				</ul>
			</div>

			<div class="col-md-4 item-footer">
				<ul class="item-footer-latest">
					<li>
						<span>Suscripción a boletines</span> 
						<img src="<?php echo base_url().'assets/img/facebook.png'?>">
						<img src="<?php echo base_url().'assets/img/facebook.png'?>">
						<img src="<?php echo base_url().'assets/img/facebook.png'?>">
					</li>
					<li><input type="email" placeholder="Email" class="form-control"></li>
					<li><span class="copyright">Copyright 2016 <span class="blue">EncuentraloFacil</span> Todos los derechos reservados</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>



</body>

<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/owl.carousel.css'?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/animate.css'?>">
<!--link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery-ui.css'?>">-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.datepick.css'?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/styles.css'?>">
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.1.1.min.js'?>"></script>
<!--<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-ui.js'?>"></script>-->
<script type="text/javascript" src="<?php echo base_url().'assets/js/owl.carousel.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/viewChecker.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/parallax.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/upload-preview.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/departaments-cities.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.datepick.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/functions.js'?>"></script>
<script type="text/javascript">
	$('.slide-header').owlCarousel({
	    items:1,
	    loop:true,
	    nav:false,
	    autoplay:true,
	    smartSpeed:1000,
	    navText:["&#8592;","&#8594;"]
	});	

	$('.slide-home').owlCarousel({
	    items:1,
	    loop:true,
	    nav:true,
	    autoplay:true,
	    smartSpeed:1000,
	    navText:["&#8592;","&#8594;"],
	    margin:10,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:4
	        }
	    }
	});	
</script>

</html>