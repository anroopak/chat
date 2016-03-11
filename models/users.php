<?php

// Including db_config.php file. Please read the db_config.php file for more details. 

function register_user($name, $email, $password, $repassword){

	require_once "./models/db_config.php";

	// Do the Sanity Check
	$valid = true;
	$message = "";

	if($name == ""){
		$message .= "Invalid Name <br />";
		$valid = false;
	}
	if ($email == "") {
		$message .= "Invalid Email <br />";
		$valid = false;
	}
	if ($password == "") {
		$message .= "Invalid Password <br />";
		$valid = false;
	}
	if ($repassword == "") {
		$message .= "Invalid repassword <br />";
		$valid = false;
	}
	if ($password != $repassword) {
		$message .= "Passwords must match <br />";
		$valid = false;
	}


	// Insert the Values into DB
	if($valid) {

		// Connect to MySQL
		$conn = new mysqli($db_host, $db_username, $db_password, $db_name); // these variables are being re-used from db_config.php

		// Execute Query 
		$sql_query = "INSERT INTO users (id, name, email, password) VALUES (NULL, '$name', '$email', '$password')";
		$result = $conn -> query($sql_query);

		// Show Result
		if($result){
			$message .= "User Register Success";
		} else {
			$message .= "User Register failed";
		}

		// Close the Connection
		$conn -> close();
	}

	return array('valid' => $valid, 'message' => $message);
}

function login($email, $password){

	require_once "./models/db_config.php";
	
	// Connect to DB
	$conn = new mysqli($db_host, $db_username, $db_password, $db_name); // these variables are being re-used from db_config.php

	// Execute the Select Query
	$sql_query = "SELECT id, name, email FROM users WHERE email = '$email' AND password = '$password';";
	$result = $conn -> query($sql_query);

	// Check if Email and Password are same
	if($result -> num_rows == 0){
		$return_result = false;
	} else {
		$return_result = $result -> fetch_assoc();
	}

	// Close Connection
	$conn -> close();

	return $return_result;
}

?>