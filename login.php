<?php

$host = "127.0.0.80";
$user = "root";
$pass = "admin";
$db = "cloud";

$conn = mysqli_connect($host,$user,$pass,$db)
or die ("Unable to connect");
echo "Connect <BR>";

$email = $_POST['email'];
$pass = $_POST['psw'];

$query = "Select email,password from user where email='$email' AND password='$pass'";

$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);

if($row['email']==$email && $row['password']==$pass)
	echo "You are logged in";
else
	die ("Invalid credentials");

mysqli_close($conn);

?>