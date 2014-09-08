<?php
/**
 * Opauth basic configuration file to quickly get you started
 * ==========================================================
 * To use: rename to opauth.conf.php and tweak as you like
 * If you require advanced configuration options, refer to opauth.conf.php.advanced
 */

$config = array(
/**
 * Path where Opauth is accessed.
 *  - Begins and ends with /
 *  - eg. if Opauth is reached via http://example.org/auth/, path is '/auth/'
 *  - if Opauth is reached via http://auth.example.org/, path is '/'
 */
//	'path' => '/Opauth/Core/lib/Opauth/',
	'path' => '/auth/',

/**
 * Callback URL: redirected to after authentication, successful or otherwise
 */
	'callback_url' => '{path}callback.php',
	
/**
 * A random string used for signing of $auth response.
 */
	'security_salt' => 'LDFmiilYf8Fyw5W10rx4W1KsVrieQCnpBzzpTBWA5vJidQKDx8pMJbmw28R1C4m',
		
/**
 * Strategy
 * Refer to individual strategy's documentation on configuration requirements.
 * 
 * eg.
 * 'Strategy' => array(
 * 
 *   'Facebook' => array(
 *      'app_id' => 'APP ID',
 *      'app_secret' => 'APP_SECRET'
 *    ),
 * 
 * )
 *
 */
	'Strategy' => array(
		// Define strategies and their respective configs here

		 'Facebook' => array(
         'app_id' => '1460835000856920',
         'app_secret' => '6f4468983c570e4b38a97fec85eb70a3') , 

         'Google' => array(
    'client_id' => '128873310281-ev4bn0ur96ujqpvf9s48gv5uqqin6l02.apps.googleusercontent.com',
    'client_secret' => 'bHPiEoaCsLcqxNMfuobekW_u'),

    'Twitter' => array(
    'key' => ' XmfRVeWAOeISDVkdMOPepTTd2',
    'secret' => 'MZqT9cDt8xo920Yhh1Hmdki7KdtzjqLhR0jGUbPDCjdaEkVKoG'
     )	
)

	);