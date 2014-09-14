   <?php 

session_start();

   include('header.inc.html'); 

include('carousel.inc.html');


?>

<div class="container">

<?php

 if(isset($_SESSION['user_id']))
            {
                include('latestbooks.inc.php');
                  
            }
            else
        include('login.inc.php');?>
</div>

<?php
include('footer.inc.html'); ?>
