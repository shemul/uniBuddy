$(function() {
//twitter bootstrap script
	$("button#submit").click(function(){
		   	$.ajax({
    		   	type: "POST",
			url: "../lib/exsec_process.php",
			data: $('form.contact').serialize(),
        		success: function(msg){
        			console.log("data successfully passed to server and saved ");
 	          		  $("#thanks").html(msg)
 		        	$("#modal-id").modal('hide');	
 		        },
			error: function(){
				 $("#error").html("Failed to Save at this moment , please after sometime");
				 $("#modal-id").modal('hide');	
				}
      			});
	});
});