$(document).ready(function(){
	
	/*var scene = document.getElementById('scene');
	var parallax = new Parallax(scene);*/ 

	$('#birthdate').datepick($.extend({}, $.datepick.regionalOptions['es'])); 
	/*******Tabs Register****/
	$("#logo-upload").click(function(){
	  $.uploadPreview({
	    input_field: "#logo-upload",
	    preview_box: "#preview-logo",
	    no_label: true
	  });

	  $("#preview-logo").addClass("imageUpload");
	});

	$("#image-upload").click(function(){
	  	$.uploadPreview({
	    input_field: "#image-upload",
	    preview_box: "#preview-image",
	    no_label: true
	  });

	  $("#preview-image").addClass("imageUpload");   
	  
	});



	/*Form register*/
	var name = "";
	var email = "";
	var typeIdentification = "";
	var identification = "";
	var birthdate = "";
	var gender = "";
	var nit = "";
	var typeBusiness = "";
	var nameBusiness = "";
	var addressBusiness = "";
	var telephoneBusiness = "";
	var department = "";
	var city = "";
	var logo = "";
	var coverpage = "";

	/*********Form User*******/
	$("#btn-user").click(function(){
		
		/*Validate*/
		name = $("#username").val();
		email = $("#email").val();
		typeIdentification = $("#typeIdentification").val();
		identification = $("#identification").val();		
		birthdate = $("#birthdate").val();
		gender = $("#gender").val();

		if(name == ""){
			$(".errorUsername").html("Ingresa un nombre").show();
			$("#username").focus();
			return false;
		} else if(email == ""){
			$(".errorEmail").html("Ingresa un correo electrónico").show();
			$("#email").focus();
			return false;
		} else if(identification == ""){
			$(".errorIdentification").html("Ingresa tu número de identificación").show();
			$("#identification").focus();
			return false;
		}else if(birthdate == ""){
			$(".errorBirthdate").html("Ingresa tu fecha de nacimiento").show();
			$("#birthdate").focus();
			return false;
		}

		$("#tab-user").removeClass("active");
		$("#tab-business").addClass("active");

		$("#generalDates").removeClass("active");
		$("#businessDates").addClass("active in");

		$("#tab-business").removeClass("disabled");
		$("#tab-business a").attr("href","#businessDates");
		
	});



	/*********Form User*******/
	$("#btn-business").click(function(){

		/*Validate*/
		nit = $("#nit").val();
		typeBusiness = $("#typeBusiness").val();
		nameBusiness = $("#nameBusiness").val();
		addressBusiness = $("#addressBusiness").val();		
		telephoneBusiness = $("#telephoneBusiness").val();
		department = $("#department").val();
		city = $("#city").val();
		logo  = $("#logo").val();
		coverpage  = $("#coverpage").val();

		if(nit == ""){
			$(".errorNit").html("Ingresa el nit").show();
			$("#nit").focus();
			return false;
		} else if(typeBusiness == ""){
			$(".errorTypeBusiness").html("Ingresa un correo electrónico").show();
			$("#typeBusiness").focus();
			return false;
		} else if(nameBusiness == ""){
			$(".errorNameBusiness").html("Ingresa tu número de identificación").show();
			$("#nameBusiness").focus();
			return false;
		}else if(addressBusiness == ""){
			$(".errorAddressBusiness").html("Ingresa tu fecha de nacimiento").show();
			$("#addressBusiness").focus();
			return false;
		}


		$("#tab-business").removeClass("active");
		$("#tab-activation").addClass("active");

		$("#businessDates").removeClass("active");
		$("#activationDates").addClass("active in");

		$("#tab-activation").removeClass("disabled");
		$("#tab-activation a").attr("href","#activationDates");
	});


	$("#submitForm").click(function(){
		event.preventDefault();
		var code = $("#codeBusiness").val();
		$.get(baseUrl+'Users/validateCodeUser/'+code,function(response){
			console.log(response);
			if(response){
				$("#form-register").submit();
			} else{
				$("#validationModal").modal("show");
			}
		})

	})

})