    <?php
    // start a new session (required for Hybridauth)
    session_start();
    // change the following paths if necessary
    $config = dirname(__FILE__) . '/config.php';
    require_once( "Hybrid/Auth.php" );
    try{
    // create an instance for Hybridauth with the configuration file path as parameter
    $hybridauth = new Hybrid_Auth( $config );
    // try to authenticate the user with twitter,
    // user will be redirected to Twitter for authentication,
    // if he already did, then Hybridauth will ignore this step and return an instance of the adapter
        $params['hauth_return_to'] = "http://bookmart.herokuapp.com/home.php";
    $fb = $hybridauth->authenticate( "Google" );

     $user_profile = $fb->getUserProfile();
     
       $_SESSION['user_id'] =$user_profile->identifier;
        $_SESSION['first_name'] = $user_profile->firstName;
        $_SESSION['email']=  $user_profile->photoURL;

      print "<html><head><meta http-equiv='refresh' content='0;http://bookmart.herokuapp.com/home.php'></head></html>";
   }
    catch( Exception $e ){
        switch( $e->getCode() ){
    case 0 : echo "Unspecified error."; break;
    case 1 : echo "Hybriauth configuration error."; break;
    case 2 : echo "Provider not properly configured."; break;
    case 3 : echo "Unknown or disabled provider."; break;
    case 4 : echo "Missing provider application credentials."; break;
    case 5 : echo "Authentification failed. "
    . "The user has canceled the authentication or the provider refused the connection.";
    break;
    case 6 : echo "User profile request failed. Most likely the user is not connected "
    . "to the provider and he should authenticate again.";
    $twitter->logout();
    break;
    case 7 : echo "User not connected to the provider.";
    $twitter->logout();
    break;
    case 8 : echo "Provider does not support this feature."; break;
    }
     
    // well, basically your should not display this to the end user, just give him a hint and move on..
    echo "<br /><br /><b>Original error message:</b> " . $e->getMessage();
    }