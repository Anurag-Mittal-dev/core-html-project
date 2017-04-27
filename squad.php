<?php

$host = "127.0.0.80";
$user = "root";
$pass = "admin";
$db = "cloud";

$conn = mysqli_connect($host,$user,$pass,$db) or die("Could not connect");

$query = "select * from squad";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows > 0) {
	while($row = mysqli_fetch_assoc()) {
		echo "<TABLE><BR>" . "TR" . "<TH>" ."ID" . "</TH>" . "<TR>" . "<TH>" . "Player" . "</TH>" . "</TR>" . "<TR>" . "<TH>" . "Age" . "</TR>" . "</TR>" . "<TR>" . "<TH>" . "Country" . "</TR>" . "</TR>" . "<TR>" . "<TH>" . "Position" . "</TR>" . "</TR>" . "</TABLE>";
	}
}