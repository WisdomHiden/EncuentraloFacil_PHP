<div class="container login">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 title">
			<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
			Inicio de sesión
		</div>
	</div>
	<div class="row">
		<form action="<?php echo base_url().'service/users/login'?>" method="post" class="col-md-4 col-md-offset-4">
			<div class="form-group">
			    <input type="email" name="user" placeholder="Email" class="form-control">
			 </div>
			 <div class="form-group">
			    <input type="password" name="password" placeholder="Contraseña" class="form-control">
			 </div>
			 <div class="checkbox">
			    <label>
			      <input type="checkbox"> Acepto terminos y condiciones
			    </label>
			  </div>
			 <div class="form-group">
			   <input class="btn form-control btn-login" type="submit" value="Iniciar">
			 </div>
		</form>
	</div>

	<div class="row buttons-login">
		<div class="col-md-8 col-md-offset-2">
			<div class="col-sm-4">
				<a class="form-control" href="<?php echo base_url().'users/register'?>" role="button">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					Aun no tengo cuenta
				</a>
			</div>
			<div class="col-sm-4">
				<a class="form-control" href="#" role="button">
					<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
					Olvide mi contraseña
				</a>
			</div>
			<div class="col-sm-4">
				<a class="form-control facebook" href="#" role="button">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					Entrar con facebook
				</a>
			</div>
		</div>
	</div>
</div>