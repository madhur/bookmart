<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
	require('login_functions.inc.php');
	require('mysqli_connect.php');

	list($check, $data) = check_login($dbc, $_POST['email'], $_POST['pass']);

	if($check)
	{
		setcookie('user_id', $data['user_id']);
		setcookie('first_name', $data['first_name']);
		
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