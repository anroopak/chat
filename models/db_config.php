<?php

/* 

db_config.php has the values of 
	Host ("localhost"),
	Username ("root"),
	Password (""),
	Database Name - db ("chat")

-----

You can change the values of the variables based on your project. 
Eg:- For the Paliative care project, the DB variable can be "paliative_care"

-----

This file can be used in other files so that, the variables in this file can be re-used.
Eg:- 
	In users.php, there are 2 functions, register_user and login. 
	In both the functions, we are calling, the mysqli function. 
	In both the functions, we are giving the values.
	Suppose we are changing the username or password, then, we should go and change in all the functions. 
	Instead of that, keep all the re-used values here, and use only the variables.


*/

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "chat";

?>