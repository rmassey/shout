<!DOCTYPE HTML>

<html lang='en'>

	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen">
		<title>Shout!</title>
	</head>



	<body>


    <div id="container">
      <h1>Shoutbox</h1>

<?php
$self = $_SERVER['PHP_SELF'];
$ipaddress = ("$_SERVER[REMOTE_ADDR]");
include ('db.php');

$connect = mysql_connect($host, $username, $password) or die ('<p class="error>Unable to connect to the database server at this time.</p>');

mysql_select_db($database, $connect) or die ('<p class="error">Unable to connect to the database at this time.>/p>');



?>






    </div>

	</body>


</html>