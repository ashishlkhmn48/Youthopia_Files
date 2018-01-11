<?php

//database connection
$db_name = "id2084390_event";
$mysql_username = "id2084390_event";
$mysql_password = "ashish123";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);


$event_name = $_POST["event_name"];
$email = $_POST["email"];

$query = "select * from main_table where email='$email' AND event='$event_name';";
$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0){
			echo "registered";
		}

mysqli_close($conn);
?>