<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "admin";

mysql_connect($host,$user,$password);
$mysql_select_db($db);

if(isset($_POST['Username'])){
	$uname = $_POST['Username'];
	$password = $_POST['password'];
	$sql = "select * from admin where username='".$uname."'AND password='".$password."'limit 1";
	$result=mysql_query($sql);
	if(mysql_num_rows($result)==1){
		ech "logged in successfully....";
		exit();
	}
	else{
		echo "invalid username or password...";
		exit(); 
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<title> Admin Page </title>
<link rel="stylesheet" href="Addmin.css" type="text/css">
</head>
<body>	

    <center>
	<div class="h" style="background-color:transparent;">
	<div class="c" style="background-color: transparent;">
		<p style="text-align: center;font-size:16pt;font-family:italic;color:white; margin-top: 70px; padding-top: 40px;"> <strong >Administrator Login </strong></p>
		<form name="my form" action="#" method="post" style="text-align:center;">
			<input type="text" placeholder="Username" name="Username" id="textboxid"><br>
			<input type="password" placeholder="Password" name="password" id="textboxid"><br>
			<button class="b" style="font-family: verdana;font-size:16pt;color:#ffffff;"><strong> Login </strong></button><br>
		</form>
</div>
</div>
</center>
</div>
</body>
</html>