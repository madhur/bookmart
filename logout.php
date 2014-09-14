<?php

session_start();

if(!isset($_SESSION['user_id']))
{

	require('login_functions.inc.php');

	redirect_user();
}
else
{
	$_SESSION = array();
	session_destroy();

	setcookie ('PHPSESSID', '', time( )-3600,    '/',   '',   0 ,   0);  

}

  include('header.inc.html'); 

  print "<h1>Logged out</h1>
  <p>You are now logged out</p>
	 <p><a	href=\"login.php\">Login</a></p>";

  include('footer.inc.html'); ?>