<?php

//database connection
$db_name = "id2084390_event";
$mysql_username = "id2084390_event";
$mysql_password = "ashish123";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);


$event_name = $_POST["event_name"];
$name = $_POST["name"];
$gender = $_POST["gender"];
$number_of_members = $_POST["number_of_members"];
$email = $_POST["email"];
$phone_number = $_POST["phone_number"];
$college_name = $_POST["college_name"];


switch(strtolower($event_name)){
	case "ampchaos" : $query = "insert into ampchaos values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";			  
						break;
	
	case "fashionista" : $query = "insert into fashionista values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";
						 break;
						 
	case "festin beats" : $query = "insert into festin_beats values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";
						  break;
						  
	case "odeum" : $query = "insert into odeum values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";
				   break;
				   
	case "combat-de-robo" : $query = "insert into combat_de_robo values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";
							break;
							
	case "coding rampage" : $query = "insert into coding_rampage values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";
							break;
							
	case "sherlocked" : $query = "insert into sherlocked values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";
						break;
						
	case "full throttle" : $query = "insert into full_throttle values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";
							break;
							
	case "bridge-de-gap" : $query = "insert into bridge_de_gap values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";
							break;
							
	case "vastu nirman" : $query = "insert into vastu_nirman values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";
							break;
							
	case "fifa 15" : $query = "insert into fifa values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";
					break;
					
	case "counter strike" : $query = "insert into counter_strike values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";
							break;
							
	case "need for speed" : $query = "insert into need_for_speed values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";
							break;
							
	case "dit's got talent" : $query = "insert into dit_got_talent values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";
								break;
								
	case "kingships suspension" : $query = "insert into kingships_suspension values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";
									break;
									
	case "gully cricket" : $query = "insert into gully_cricket values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";
							break;
							
	case "futsal" : $query = "insert into futsal values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";
					break;
					
	case "fine arts" : $query = "insert into fine_arts values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";
						break;
						
	case "creative writing" : $query = "insert into creative_writing values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";
							break;
								
	case "fantasy inc." : $query = "insert into fantasy values('$name','$gender','$number_of_members','$email','$phone_number','$college_name');";
							break;
}

$mainQuery = "insert into main_table values('$email','$name','$event_name');";
$mainResult = mysqli_query($conn, $mainQuery);
$result = mysqli_query($conn, $query);

if($result && $mainResult){  
    echo "Successfully Registered";
}

mysqli_close($conn);
?>