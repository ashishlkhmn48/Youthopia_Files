<?php

//database connection
$db_name = "id2084390_event";
$mysql_username = "id2084390_event";
$mysql_password = "ashish123";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);

$fcm_token = $_POST["token"];
$email = $_POST["email"];

$query = "select fcm_token from fcm_info where email = '$email';";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
	$if_query = "update fcm_info set fcm_token = '$fcm_token' where email = '$email';";
	$if_result = mysqli_query($conn, $if_query);
	if($if_result)
		echo "updated";
	else
		echo "not updated";
}
else{
	$else_query = "insert into fcm_info values('$email','$fcm_token');";
	$else_result = mysqli_query($conn, $else_query);
	if($else_result)
		echo "inserted";
	else
		echo "not inserted";
}
?>