<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="global.css" media="all">
<script type="text/javascript" src="groupBankJS.js"></script>

<?php
// include the DBlogin.php file within the site
include_once 'DBlogin.php';
$error = "";
//
if (isset($_POST['user']))
{
	$user = sanitizeString($_POST['user']);
	$pass = sanitizeString($_POST['pass']);
	
	
	if ($user == "" || $pass == "")
	{
		echo $error = "Not all fields were entered. Please press back button. <br>";
		print '<script type="text/javascript">';
		print ' document.loginPHP.user.value=""; document.loginPHP.pass.value=null'; 
		print '</script>';
		
	}
	else
	{
		$query = "SELECT * 
FROM `Users` 
WHERE `userName` LIKE '$user'
AND `password` LIKE '$pass'
LIMIT 0 , 30" ;	
	}
	
	if (mysql_num_rows(queryMysql($query)) == 0)
	{
		print '<script type="text/javascript">'; 
print 'alert("Could not retrieve Username/Password for '.$user.' and '.$pass.'"); document.loginPHP.user.value=""; document.loginPHP.pass.value=null'; 
print '</script>';

		
	}
	else
	{
		$_SESSION['user'] = $user;
		$_SESSION['pass'] = $pass;
		header("Location: http://www.ctugroupswe.uphero.com/mainmenu.html");	
	}
}
echo <<<_END
<h1>Group Bank</h1> 
<h2>Customer Login</h2>
<div class="logInInfo">  
<form method='post'
action='login.php'>
Username: <br><input type='text' maxlength='16'
name='user' /><br>
Password: <br><input type='password' maxlength='16'
name='pass' /><br>
<input type='submit' value='Login'/>

</form>
</div>
_END

?>

</head>
<body>



<br>
<h3>This is just a test web site for a school project</h3>
</body>
</html> 
