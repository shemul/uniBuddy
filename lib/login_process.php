<?php
	
	if (isset($_POST['username']))
	{
	 	include("db/db_config.php");
	 // Grab User submitted information
		$user = $_POST["username"];
		$pass = $_REQUEST["password"];
		$result=mysql_query("select * from user_accounts where username='$user' 
		          AND password='$pass' ")or die (mysql_error());
			
		$count=mysql_num_rows($result);
		$row=mysql_fetch_array($result);


		if ($count > 0) 
		{
			echo "Logout";
		}
		else
		{
			header('HTTP/1.1 500 Internal Server Booboo');
        	header('Content-Type: application/json; charset=UTF-8');
		}
		mysql_close($con);
	}

?>