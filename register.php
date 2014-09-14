   <?php 

   include('header.inc.html'); 

   if($_SERVER['REQUEST_METHOD']=='POST')
   {

    if(isset($_POST['register']))
    {




     if(empty($_POST['firstname']))
        {
            $errors[] = 'First Name is mandatory';
        }
        else
          $firstname = $_POST['firstname'];

         if(empty($_POST['lastname']))
        {
            $errors[] = 'Last Name is mandatory';
        }
        else
          $lastname = $_POST['lastname'];


        if(empty($_POST['password']))
        {
            $errors[] = 'password is mandatory';
        }
        else
          $password = $_POST['password'];

        if(empty($_POST['email']))
        {
            $errors[] = 'Email is mandatory';
        }
        else
          $email = $_POST['email'];

        if(empty($_POST['password_confirm']))
        {
            $errors[] = 'You did not confirm your password';
        }
        else
        {
          if(!empty($_POST['password']))
          {
              if($_POST['password']!=$_POST['password_confirm'])
              {
                $errors[] = 'Your passwords did not match';
              }
          }
        }

        require_once('mysqli_connect.php');

        if(UserExists($email, $dbc))
        {
          $errors[] = "User already exists";
        }


        if(empty($errors))
        {
           



            $q = "INSERT INTO USERS(first_name, last_name, email, pass, registration_date) VALUES('$firstname','$lastname','$email', SHA1('$password'), NOW())";

            $r = mysqli_query($dbc, $q);

            if($r)
            {
                print '<h1>Thank you</h1>
                <p>You are now registered.';

            }
            else
            {
                print '<h1>System error</h1>
                <p>You could not be registered due to a system error. We apologize for any inconvenience';
            }

            mysqli_close($dbc);


            include('footer.inc.html'); 
            exit();


        }
        else
        {

              
              
             
           
      

        }

      }
      else if(isset($_POST['login']))
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

   }

   function UserExists($email, $dbc)
   {
      

      $q = "SELECT email from users where email='".$email."'";
  
      $r = mysqli_query($dbc, $q);

     
      if(!$r)
      {
          die (mysqli_error($dbc)) ;
      }
     
           $num_rows = $r->num_rows;

           mysqli_free_result($r);
          
           if($num_rows > 0)
              return true;
            else
              return false;
   }

   ?>

<div class="container">
<div class="row">

   <!-- Nav tabs -->

<ul id="myTab" class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#register" id="#regsiter" role="tab" data-toggle="tab"><h3>Sign up</h3></a></li>
  <li><a href="#login" id="#login" role="tab" data-toggle="tab"><h3>Login</h3></a></li>
</ul>


<div class="tab-content">
  <div class="tab-pane" id="login">
    <?php
        include('login.inc.php');
    ?>


  </div>
  <div class="tab-pane active" id="register">


  <?php
        include('register.inc.php');
    ?>


  </div>
 
</div>
<?php
if(isset($errors))
{

  print "<div style='text-align:center'>";
  foreach  ($errors as  $msg) 
               { //  Print each  error.
                 echo "<p class='text-danger'>$msg<br /></p>\n";
               }

  print "</div>";
}

?>

</div>

</div>
   <?php include('footer.inc.html'); ?>
