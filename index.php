<?php 

if (isset($_POST['submit'])) {
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	require_once("./models/users.php");

	$result = login($email, $password);

	if ($result) {
		
		session_start();
		$_SESSION['logged_in'] = true;

		$_SESSION['user_id'] = $result['id'];
		$_SESSION['email'] = $result['email'];
		$_SESSION['name'] = $result['name'];

		header("Location: chat.php");
		die();
	}

}

// Include the Views also
require_once("./views/templates/header.php");

require_once("./views/home.php");

require_once("./views/templates/footer.php");

?>