<?php
	ob_start();
	require_once("../includes/functions.php");

	$connection = connect_db();

	$username = isset($_POST["username"]) ? $_POST["username"]: "";
	$password = isset($_POST["password"]) ? $_POST["password"]: "";

	$search_user = search_db('Users', 'username', $username);
	$search_pass = search_db('Users', 'password', $password);

	if($search_user == 1 and $search_pass == 1)
	{
		redirect_to("../site.html");
	}
	else
	{ 
		redirect_to("../public/log_in.php?again=1");
	}

	ob_end_flush();
?>