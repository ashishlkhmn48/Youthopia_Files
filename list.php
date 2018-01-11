<?php

//database connection
$db_name = "id2084390_event";
$mysql_username = "id2084390_event";
$mysql_password = "ashish123";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);

$email = $_POST["email"];
$query = "select event from main_table where email='$email';";
$result = mysqli_query($conn, $query);
$response = array();

while($row=mysqli_fetch_array($result)){
       array_push($response,array("event"=>$row["event"]));
}
echo json_encode($response);

mysqli_close($conn);
?>