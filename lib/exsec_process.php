<?php
	if(isset($_POST['courseOff'])) {

		$courseOff =  $_POST['courseOff'];
		$courseOffSec =  $_POST['courseOffSec'];
		$askCourse = $_POST['askCourse'];
		if ($courseOff != "") {
			include ("db/db_config.php");

			$sql="INSERT INTO user_accounts (username, password)
			VALUES ('$courseOff', '$courseOffSec')";

			if (!mysqli_query($mysqli,$sql)) {
			  die('Error: ' . mysqli_error($mysqli));
			}
			echo "you're submission has been processed successfully !";

			mysqli_close($mysqli);

		} else {
			header('HTTP/1.1 500 Internal Server Booboo');
        	header('Content-Type: application/json; charset=UTF-8');
			//echo "err";
		}
		
		

	}


	
?>