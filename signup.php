<?php

$host = "127.0.0.80";
$user = "root";
$pass = "admin";
$db = "cloud";

$conn = mysqli_connect($host,$user,$pass,$db) or die("Could not connect");
echo "Connected <br>";

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$pass = $_POST['psw'];

$query = "insert into user values('$name','$gender','$age','$email','$pass')";

$exec = mysqli_query($conn,$query);
if(!$exec){
	die("Not Inserted");
}
else{
	echo "Inserted";
}

mysqli_close($conn);

?>