// JavaScript Validation For Registration Page

$('document').ready(function()
{ 		 		
		 // name validation
		  //var nameregex = /^[a-zA-Z ]+$/;
		 
		 /*$.validator.addMethod("validname", function( value, element ) {
		     return this.optional( element ) || nameregex.test( value );
		 }); */
		 
		 // valid email pattern
		 var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 
		 $.validator.addMethod("validemail", function( value, element ) {
		     return this.optional( element ) || eregex.test( value );
		 });
		 
		 $("#formMiembro").validate({
					
		  rules:
		  {
				//val_09: {
					///required: true,
					
					
				//},
				val_07: {
					required: true,
					validemail: true
				},
				val_08: {
					required: true,
					minlength: 6,
					maxlength: 15
				},
				cpassword: {
					required: true,
					equalTo: '#password'
				}
		   },
		   messages:
		   {
				//val_09: {
					//required: "Please Enter User Name",
					
					  //},
			    val_07: {
					  required: "Ingrese la dirección de correo electrónico",
					  validemail: "Ingrese una dirección de correo electrónico válida"
					   },
				val_08:{
					required: "Por favor, ingrese la contraseña",
					minlength: "La contraseña debe tener al menos 6 caracteres"
					},
				cpassword:{
					required: "Por favor, vuelva a escribir la contraseña",
					equalTo: "La contraseña no coincidió !"
					}
		   },
		   errorPlacement : function(error, element) {
			  $(element).closest('.form-group').find('.help-block').html(error.html());
		   },
		   highlight : function(element) {
			  $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		   },
		   unhighlight: function(element, errorClass, validClass) {
			  $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			  $(element).closest('.form-group').find('.help-block').html('');
		   },
		   
		   	
				
				submitHandler: function(form){
					
					//alert('submitted');
					form.submit();
					//var url = $('#register-form').attr('action');
					//location.href=url;
                                         $("#formMiembro").resetForm();
					
				}
		   
		   }); 
		   
		   
		   /*function submitForm(){
			 
			   
			   /*$('#message').slideDown(200, function(){
				   
				   $('#message').delay(3000).slideUp(100);
				   $("#register-form")[0].reset();
				   $(element).closest('.form-group').find("error").removeClass("has-success");
				    
			   });
			   
			   alert('form submitted...');
			   $("#register-form").resetForm();
			      
		   }*/
});