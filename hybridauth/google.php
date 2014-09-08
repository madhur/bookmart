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
    $fb = $hybridauth->authenticate( "Google" );
     
   }
    catch( Exception $e ){
        echo "Error";
    }