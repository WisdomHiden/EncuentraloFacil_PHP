<!--<ul id="scene">
  <li class="layer" data-depth="0.40"><img src="<?php echo base_url().'assets/img/background.jpg'?>"></li>
  <li class="layer" data-depth="0.20"><img src="layer2.png"></li>
  <li class="layer" data-depth="0.40"><img src="layer3.png"></li>
  <li class="layer" data-depth="0.60"><img src="layer4.png"></li>
  <li class="layer" data-depth="0.80"><img src="layer5.png"></li>
  <li class="layer" data-depth="1.00"><img src="layer6.png"></li>
</ul> -->


<!-- validationModal -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="validationModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Encuentralo Facil</h4>
      </div>
      <div class="modal-body">
        
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
          	 El código ingresado es incorrecto. por favor verifica y vuelve a intentarlo.
          </div>
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


	<div class="container">
		<div class="text-center titleRegister">Registrate ahora</div>
		<div class="col-md-1"></div>
		
		<div class="col-md-10">

			<div class="row">
				<div class="col-md-12">
					<p>Bienvenido a <strong>encuentralofacil.CO</strong>, Donde puedes encontrar cualquier tipo de producto o negocio en tu ciudad, Antes de empezar necesitamos alguna información.</p> <br>
				</div>
			</div>

			<ul class="nav nav-tabs">
				<li id="tab-user" class="active"><a href="#generalDates" data-toggle="tab" class="bgUsers">1.Datos generales</a></li>
				<li id="tab-business" class="disabled"><a href="#businessDates" data-toggle="tab" class="bgBusiness">2.Datos del negocio</a></li>
				<li id="tab-activation" class="disabled"><a href="#activationDates" data-toggle="tab" class="bgActivation">3.Activación de negocio</a></li>
			</ul>
			<form action="<?php echo base_url().'Users/registerUser'?>" enctype="multipart/form-data" id="form-register" method="post">
			<div class="tab-content">
			<!-- General Dates -->
				<div class="tab-pane active"  id="generalDates">
					<h2 class="generalDates">Datos Generales</h2>
					<p>Por favor registra todos tus datos personales, recuerda que toda tu información está segura y es confidencial</p>
						<div class="form-group col-md-6">
							<label>Nombre Completo</label>
							<span class="errorUsername hideError"></span>
							<input type="text" name="username" class="form-control" id="username" placeholder="Ingresa tu nombre" >	
						</div>


						<div class="form-group col-md-6">
							<label>Correo Electrónico</label>
							<span class="errorEmail hideError"></span>
							<input type="email" name="Email" id="email" class="form-control" placeholder="Ingresa tu correo electrónico" >	
						</div>
				

						<div class="form-group col-md-2">
							<label>Identificación</label>
							<select class="form-control" name="typeIdentification" id="typeIdentification">
								<option value="1">C.C</option>
								<option value="2">C.E</option>
								<option value="3">T.I</option>
							</select>	
						</div>

						<div class="form-group col-md-4">
							<label>Número de identificación</label>
							<span class="errorIdentification hideError"></span>
							<input type="text" name="identification" id="identification" class="form-control" placeholder="Identificación" >
						</div>	

						<div class='col-md-3'>
							<label>Fecha de nacimiento</label>
							<span class="errorBirthdate hideError"></span>
						    <input type='text' class="form-control" id='birthdate' name="birthdate" class="form_datetime" placeholder="Fecha de nacimiento" />
						</div>

						<div class='col-md-3'>
							<label>Genero</label>
						    <select class="form-control" name="genero" id="gender">
						    	<option value="1">Femenino</option>
						    	<option value="2">Masculino</option>
						    	<option value="3">Indefinido</option>
						    </select>
						</div>

						<div class="col-md-12 text-right">
							<div class="btn-form bgBlue text-right" id="btn-user">Continuar</div>
							<!--<button  class="btn btn-primary" id="btn-user">Continuar</button>-->
						</div>
				</div>
			<!-- fin -->

			<!-- Businnes Dates -->
				<div class="tab-pane fade"  id="businessDates">
					<h2 class="businessDates">Registra tu negocio</h2>
					<p>Posiciona tu marca y aumenta tus ventas de una manera exponencial.</p>
						<div class="form-group col-md-3">
							<label>Nit</label>
							<span class="errorNit hideError"></span>
							<input type="text" name="nit" class="form-control" placeholder="Ingresa tu Nit" >	
						</div>

					
						<div class="form-group col-md-3">
							<label for="exampleInputEmail1">Tipo de negocio</label>
							<span class="errorTypeBusiness hideError"></span>
							<!--<input type="text" name="typeBusiness" class="form-control" placeholder="Tipo de negocio">--> 
							<select class="form-control" name="typeBusiness" id="typeBusiness">
								<?php foreach($typesBusiness as $type) { ?>
									<option value="<?php echo $type["ID_TIPO_NEGOCIO"]; ?>">
										<?php echo $type["NOMBRE"];?>
									</option>
								<?php } ?>
								<option>Otro</option>
							</select>
						</div>
						
						<div class="form-group col-md-6">
							<label>Nombre</label>
							<span class="errorNameBusiness hideError"></span>
							<input type="text" name="nameBusiness" id="nameBusiness" class="form-control" placeholder="Nombre del negocio" >		
						</div>

						<div class="form-group col-md-3">
							<label>Dirección</label>
							<span class="errorAddressBusiness hideError"></span>
							<input type="text" name="address" id="addressBusiness" class="form-control" placeholder="Dirección del negocio" >		
						</div>


						<div class="form-group col-md-3">
							<label>Teléfono</label>
							<input type="text" name="telephone" class="form-control" placeholder="Teléfono del negocio" >		
						</div>

						<div class="form-group col-md-3">
							<label>Departamento</label>
							<select class="form-control" name="department" id="department0">
								<option>Departamento</option>
							</select>	
						</div>

						<div class="form-group col-md-3">
							<label>Ciudad</label>
							<select class="form-control" name="city" id="city0">
							<option>Ciudad</option>
							</select>	
						</div>
						
						<div class="form-group col-md-6">
							<label>Logo del negocio</label>
							<input type="file" name="logo" id="logo-upload" />
							<div id="preview-logo" class="preview-image"></div>
						</div>

						<div class="form-group col-md-6">
							<label>Imagen de portada</label>
							<input type="file" name="portada" id="image-upload" />
							<div id="preview-image" class="preview-image"></div>
						</div>

						<div class="form-group col-md-12 text-right">
							<div class="btn-form bgOrange text-right" id="btn-business">Continuar</div>
							<!--<button  class="btn bgOrange" id="btn-business">Continuar</button>-->
						</div>
				</div>
			<!-- fin -->
					

				<div class="tab-pane fade"  id="activationDates">
					<h2 class="activationDates">Ingresa tu codigo de negocio</h2>
					<p>Tu código único de encuentralofacil.CO te permite identificar tu negocio y acceder a todos los servicios que tenemos preparados para ti.</p>
					<div class="form-group col-md-6">
						<label>Código</label>
						<input type="text" name="codeBusiness" id="codeBusiness" class="form-control" placeholder="Ingresar aqui tu código de negocio" >		
					</div>

					<div class="col-md-12 ">
						<input type="submit" id="submitForm" value="Continuar" class="btn-form bgGreen">
						<!--<button  class="btn bgGreen">Finalizar</button>-->
					</div>
				</div>
			</div>
			</form>
		</div>	
		<div class="col-md-1"></div>
</div>