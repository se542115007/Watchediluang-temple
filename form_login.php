<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> New Document </TITLE>
 </HEAD>
 <BODY>
<?php
define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "root"); // set database user
define ("DB_PASS",""); // set database password
define ("DB_NAME","watchediluang"); // set database name
 
$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");
?> </BODY>
</HTML>
