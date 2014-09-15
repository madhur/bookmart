<?php

session_start();

require('login_functions.inc.php');

if(!isset($_SESSION['user_id']))
{

	

	redirect_user('index.php');
}
else
{
	$_SESSION = array();
	session_destroy();

	setcookie ('PHPSESSID', '', time( )-3600,    '/',   '',   0 ,   0);  

}



  include('header.inc.html'); 

 redirect_user('index.php');

  include('footer.inc.html'); ?>