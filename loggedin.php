<?php

session_start();

if(!isset($_SESSION['user_id']))
{
	require('login_functions.inc.php');

	redirect_user();
}

  include('header.inc.html'); 

  print "<h1>Logged in</h1>
  <p>You are now logged in, {$_SESSION['first_name']}!</p>
	 <p><a	href=\"logout.php\">Logout</a></p>";

  include('footer.inc.html'); ?>