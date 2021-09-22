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
					  required: "Ingrese la direcci�n de correo electr�nico",
					  validemail: "Ingrese una direcci�n de correo electr�nico v�lida"
					   },
				val_08:{
					required: "Por favor, ingrese la contrase�a",
					minlength: "La contrase�a debe tener al menos 6 caracteres"
					},
				cpassword:{
					required: "Por favor, vuelva a escribir la contrase�a",
					equalTo: "La contrase�a no coincidi� !"
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