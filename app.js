const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});


$("#search-icon").click(function() {
  $(".nav").toggleClass("search");
  $(".nav").toggleClass("no-search");
  $(".search-input").toggleClass("search-active");
});

$('.menu-toggle').click(function(){
   $(".nav").toggleClass("mobile-nav");
   $(this).toggleClass("is-active");
});



$(document).ready(function() {
	$('#Register_submit').click(function(){
		$("#form").submit();
	});

	$('#login').click(function(event){
		event.preventDefault();
		$('#sign-in-form').submit();
	});
	$('#logout').click(function(event){
		event.preventDefault();
		alert
	});
    
});

$("#form").validate({
	   	 rules: {
	         fullname: 'required',
	         dob: 'required',
	         phone: 'required',
	         password: 'required', 
	         email: {
	            required: true,
	            email: true,//add an email rule that will ensure the value entered is valid email id.
	            maxlength: 255,
	         },
	      },
	      submitHandler: function(form){
      	    		var formData = {
		        fullname: $("#fullname").val(),
		        dob: $("#dob").val(),
		        phone: $("#phone").val(),
		        email: $("#email").val(),	
		        password: $("#pwd").val(),
		        action: 'register',
		      };
	     // var name = $("#fullname").val();
	      $.ajax({
	        type: "POST",
	        url: "save.php",
	        data: formData,
	        dataType: "json",
	        encode: true,
	      }).done(function (data) {
	        console.log(data);
	        if (!data.success) {
				$('.help-block').empty();
	            if (data.errors.fullname) {
	              $("#name-group").addClass("has-error");
	              $("#name-group").append(
	                '<div class="help-block">' + data.errors.fullname + "</div>"
	              );
	            }
	            if (data.errors.dob) {
	              $("#dob-group").addClass("has-error");
	              $("#dob-group").append(
	                '<div class="help-block">' + data.errors.dob + "</div>"
	              );
	            }
	            if (data.errors.phone) {
	              $("#phone-group").addClass("has-error");
	              $("#phone-group").append(
	                '<div class="help-block">' + data.errors.phone + "</div>"
	              );
	            }
	            if (data.errors.email) {
	              $("#email-group").addClass("has-error");
	              $("#email-group").append(
	                '<div class="help-block">' + data.errors.email + "</div>"
	              );
	            }
	            if (data.errors.password) {
	              $("#password-group").addClass("has-error");
	              $("#password-group").append(
	                '<div class="help-block">' + data.errors.password + "</div>"
	              );
	            }
	          } else {
	            $("#form").html(
	              '<div class="alert alert-success">' + data.message + "</div>"
	            );
	          }
	          });
	      }

	   });


$("#sign-in-form").validate({
   	 rules: {
         mobile: 'required',
         password: 'required', 
      },
      submitHandler: function(form){
      	
  	     var formData = {
	        phone: $("#mobile").val(),	
	        password: $("#pass").val(),
	        action: 'login',
	      };
		  $.ajax({
	        type: "POST",
	        url: "save.php",
	        data: formData,
	        dataType: "json",
	        encode: true,
	      }).done(function (data) {
	      	if(data.success == true){
				window.location.href = 'http://localhost/demo/home.php';
	      	}else{
	      		
	      		$('.error-message').text(data.errors);
	      	}
	        
		  });
	  }
});
