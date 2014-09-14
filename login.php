<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
	require('login_functions.inc.php');
	require('mysqli_connect.php');

	list($check, $data) = check_login($dbc, $_POST['email'], $_POST['pass']);

	if($check)
	{
		session_start();
		$_SESSION['user_id'] = $data['user_id'];
		$_SESSION['first_name'] = $data['first_name'];

		redirect_user('loggedin.php');
	}
	else
	{
		$errors = $data;

	}

	mysqli_close($dbc);
}

include('login.inc.php');

?>