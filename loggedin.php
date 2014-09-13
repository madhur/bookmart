<?php

if(!isset($_COOKIE['user_id']))
{
	require('login_functions.inc.php');

	redirect_user();
}

  include('header.inc.html'); 

  print "<h1>Logged in</h1>
  <p>You are now logged in, {$_COOKIE['first_name']}!</p>
	 <p><a	href=\"logout.php\">Logout</a></p>";

  include('footer.inc.html'); ?>