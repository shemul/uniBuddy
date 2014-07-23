<?php
	if(isset($_POST['courseOff'])) {

		$courseOff =  $_POST['courseOff'];
		$courseOffSec =  $_POST['courseOffSec'];
		$askCourse = $_POST['askCourse'];
		if ($courseOff != "") {
			include ("db/db_config.php");

			mysql_query("INSERT INTO ``(reg_name,ssc_year,mobile,bkash,location,t_shirt_size,blood_group,photo,email,pass,status,user_group,dates,times) 
		    VALUES ('$reg_name','$ssc_year','$mobile','$bkash','$location','$t_shirt_size','$blood_group','$photo','$email','$pass','$status','$user_group','$dates','$times')");


		} else {
			header('HTTP/1.1 500 Internal Server Booboo');
        	header('Content-Type: application/json; charset=UTF-8');
			//echo "err";
		}
		
		

	}


	
?>