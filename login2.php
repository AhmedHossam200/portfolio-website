<?php


   if(isset($_POST['login2'])){
    
	$uname = $_POST['uname'];
      $password=$_POST['password'];
    if($uname == "admin@gmail.com" && $password =="123456"){
         header('location:hame.php');
        
    }

        else{
                        header("location:login2.php?");
 
   
    }}   

?>


<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style55.css">
</head>
<body>
     <form  method="post">
     	<h2>LOGIN</h2>
     
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit" name="login2">Login</button>
     </form>
</body>
</html>