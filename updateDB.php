
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
    $name=$_POST["Tname"];
	$description=$_POST["Tdescription"];
    $id= $_POST["id"];


$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = "watchediluang";
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($db);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = "UPDATE attraction
        SET name=\"".$name."\" , description=\"".$description."\"
        WHERE id=\"".$id."\"";

mysql_select_db('TUTORIALS');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";

mysql_close($conn);
 

?>

</body>

</html>
