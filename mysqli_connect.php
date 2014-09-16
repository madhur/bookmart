<?php



if(false!==(getenv("CLEARDB_DATABASE_URL")))
{
	 $url=parse_url(getenv("CLEARDB_DATABASE_URL"));
    // $server = $url["host"];
    // $username = $url["user"];
    // $password = $url["pass"];
    // $db = substr($url["path"],1);

    DEFINE('DB_USER',  $url["user"]);
DEFINE('DB_PASSWORD',  $url["pass"]);
DEFINE('DB_HOST', $url["host"]);
DEFINE('DB_NAME', substr($url["path"],1));
}
else
{
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', 'root');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'bookmart');
}

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to MySQL: ' . mysqli_connect_error());

mysqli_set_charset($dbc, 'utf8');
