   <?php include('header.inc.html'); 

include('carousel.inc.html');



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
?>

<div class="container">

<?php
include('login.inc.php');?>
</div>

<?php
include('footer.inc.html'); ?>
