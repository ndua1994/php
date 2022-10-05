<?php

if(isset($_POST['submit_form']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];

	echo "Name : $username<br>Email : $email";


}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Session 5</title>
</head>
<body>


<form action="" method="post">
<input type="text" name="username" placeholder="Username">	
<input type="text" name="email" placeholder="Email ID">
<input type="submit" name="submit_form" value="Submit">
</form>



</body>
</html>