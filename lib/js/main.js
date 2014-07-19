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
