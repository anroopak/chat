<?php

session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false) {
	header("Location: index.php");
}

require_once("./views/templates/header.php");

require_once("./views/chat.php");

require_once("./views/templates/footer.php");

?>