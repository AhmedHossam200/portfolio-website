<?php 


if (isset($_POST['uname']) && isset($_POST['password'])) {



	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: login2.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login2.php?error=Password is required");
	    exit();
	}else{
	

		if ($uname == "admin@gmail.com" && $pass =="123456") {
			
            	header("Location: hame.php");
		        exit();
        
		}else{
			header("Location: login2.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: login2.php");
	exit();
}