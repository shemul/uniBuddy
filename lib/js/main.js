function test_me () {
	var request = new XMLHttpRequest();
	var dom = document.getElementById('notice');
	 request.onreadystatechange = function  () {
		if(request.readyState==4)
		{
			dom.innerHTML += "<label class='label label-warning'> " + request.responseText + "</label>"
		}
	}

	request.open("GET","http://unibuddy.com/php.php",true);
	request.send(null);
	//alert(request.responseText);
}

$(function() {
//twitter bootstrap script
	$("button#submit").click(function(){
		   	$.ajax({
    		   	type: "POST",
			url: "test.php",
			data: $('form.contact').serialize(),
        		success: function(msg){
 	          		  $("#thanks").html(msg)
 		        	$("#modal-id").modal('hide');	
 		        },
			error: function(){
				alert("failure");
				}
      			});
	});
});