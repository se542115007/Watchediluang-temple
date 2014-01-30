<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	/*mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("watchediluang") or die(mysql_error());
	*/

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "watchediluang";

  $ms = mysql_pconnect($host, $user, $pass);
  if ( !$ms )
  {
    echo "Error connecting to database.\n";
  }

  mysql_select_db($db);

	?>




</body>
</html>