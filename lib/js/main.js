$(function() {
//twitter bootstrap script
	$("button#addNewSubmit").click(function(){
		   	$.ajax({
    		   	type: "POST",
			url: "../lib/exsec_process.php",
			data: $('form.addNewForm').serialize(),
        		success: function(msg){
        			console.log(msg);
        			$("#error").html("");
 	          		$("#thanks").html(msg)
 		        	$("#addNew").modal('hide');	
 		        },
				error: function(){
					 $("#thanks").html("")
					 $("#error").html("Failed to Save at this moment , please after sometime");
					 $("#addNew").modal('hide');	
					}
	      			});
	});
// for login
	$("button#loginSubmit").click(function(){
		   	$.ajax({
    		   	type: "POST",
				url: "../lib/login_process.php",
				data: $('form.loginForm').serialize(),
        		success: function(msg){
        			console.log("loginData served to the server properly ");
 	          		$("#logStatus").html(msg);
 	          		$.notify("you're successfully logged in", "success");
 		        	$("#loginModal").modal('hide');	
 		        },
				error: function(){
					 $("#logStatus").html("Login");
					 $.notify("Login unsuccessfull", "error");
					 $("#loginModal").modal('hide');	
					}
	      			});
	});

	$("button#veryTest").click(function(){
		 var $btn = $(this);
    	$btn.button('loading');
		   	$.ajax({
    		   	type: "POST",
				url: "http://shemul.me/sms/veryTest.php",
				data: $('form.loginForm').serialize(),
        		success: function(msg){
        			alert(msg);
 		        },
				error: function(){
					 alert("err");	
					}
	      			});
		   	setTimeout(function () {
        $btn.button('reset');
    }, 1000);
	});



});