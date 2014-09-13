<?php

if(!isset($_COOKIE['user_id']))
{

	require('login_functions.inc.php');

	redirect_user();
}
else
{
	setcookie('user_id', '', time()-3600, '/', '',0,0);

	setcookie('first_name', '', time()-3600, '/', '', 0, 0);

}

  include('header.inc.html'); 

  print "<h1>Logged out</h1>
  <p>You are now logged in, {$_COOKIE ['first_name']}!</p>
	 <p><a	href=\"logout.php\">Logout</a></p>";

  include('footer.inc.html'); ?>