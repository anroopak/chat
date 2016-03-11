<?php 

if (isset($_POST['register'])) {

	// Get all form values
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];

	require_once "./models/users.php";

	$result = register_user($name, $email, $password, $repassword);
}


require_once "./views/templates/header.php";

require_once "./views/register.php";

require_once "./views/templates/footer.php";

?>