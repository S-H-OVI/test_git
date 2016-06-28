<?php
/**
* 
* connection with database
* 
*/
	$db_host = 'localhost';
	$db_user = 'root';
	$db_password = '';
	$db_name ='librarymanagement';
	
	$location = mysql_connect($db_host, $db_user, $db_password);
	
	if (!$location) 
	{
		die('Not connected : ' . mysql_error());
	}                
	$db_selected = mysql_select_db($db_name, $location);
	if (!$db_selected) 
	{
		die ('Error : ' . mysql_error());
	}

/**
* 
* Take value sent from html form
* 
*/

	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email_address"];
	$fullname = $_POST["full_name"];
	$mobile = $_POST["mobile_no"];
	$address = $_POST["address"];
	$user_type = $_POST["user_type"];
	echo "$username, $password, $email, $fullname, $mobile, $address, $user_type";
	
	/* $sql = "INSERT INTO users(username, password, fullname, email, mobile, address, type)
		VALUES('$username','$password', '$fullname', '$email', '$mobile', '$address', '$user_type')"; */
		
	/* if (!mysql_query($sql,$location))
	{
		die('Error:'  . mysql_error());
	}
	
	header('Location: user.php'); */
?>