   <?php 

   include('header.inc.html'); 

   if($_SERVER['REQUEST_METHOD']=='POST')
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
           



            $q = "INSERT INTO USERS(first_name, last_name, email, pass, registration_date) VALUES('','','$email', SHA1('$password'), NOW())";

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

              echo  '<h1>Error!</h1 >
               <p class="error">The following error(s)  occurred:<br  />';
               foreach  ($errors as  $msg) 
               { //  Print each  error.
                 echo " - $msg<br />\n";
               }
              echo '</p><p>Please try again.</p><p><br /></p>';
      

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

<div class="row">
 <div class="col-lg-10 darkBody" style="float: none; margin: 0 auto;">
  <form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
   
 
 <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">First Name</label>
      <div class="controls">
        <input type="text" id="firstname" name="firstname" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your First Name</p>
      </div>
    </div>

     <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">Last Name</label>
      <div class="controls">
        <input type="text" id="lastname" name="lastname" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your Last Name</p>
      </div>
    </div>
    


    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" required=true placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" required=true placeholder="" class="input-xlarge">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Password (Confirm)</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" required=true placeholder="" class="input-xlarge">
        <p class="help-block">Please confirm password</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Register</button>
      </div>
    </div>
  </fieldset>
</form>
 </div>
</div>
   <?php include('footer.inc.html'); ?>
