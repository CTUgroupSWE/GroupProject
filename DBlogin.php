<?php 
/* 
DBlogin.php - this file should be utilized
in any page that needs to connect to the DB
*/

// the site the DB is hosted at
$db_hostname = 'mysql16.000webhost.com';
// name of the DB
$db_database = 'a9247267_bank';
// the username used to log onto the DB
$db_username = 'a9247267_bank';
// password used to log onto the DB
$db_password = 'ctu2015';

mysql_connect($db_hostname, $db_username, $db_password) or die(mysql_error());
mysql_select_db($db_database) or die(mysql_error());

//used for an error if user hasn't entered all fields
$error = $user = $pass = "";

// used to query DB
function queryMysql($query)
{
	$result = mysql_query($query) or
	die(mysql_error());
	return $result;	
}

// used to end a users current session
function destroySession()
{
	$_SESSION=array();
	
	if (session_id() != "" ||
	isset($_COOKIE[session_name()]))
		setcookie(session_name(), '',
	time()-2592000, '/');
		
		session_destroy();	
}

//sanitize the entered string for query
function sanitizeString($var)
{
	$var = strip_tags($var);
	$var = htmlentities($var);
	$var = stripslashes($var);
	return mysql_real_escape_string($var);
}

?>