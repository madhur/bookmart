<?php

session_start();


if(!isset($_SESSION['user_id']))
{
	
	redirect_user();
}
require('login_functions.inc.php');

  include('header.inc.html'); 

?>

<div class="container">
<h1>Logged in</h1>
  <?php print "<p>Thank you for logging in, {$_SESSION['first_name']}!</p>";

  	redirect_user('home.php');
  ?>
</div>

	
 <?php include('footer.inc.html'); ?>