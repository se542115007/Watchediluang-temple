<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php include "from_login.php";
$msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $password = md5($_POST["password"]);
     if ($name == '' || $password == '') {
        $msg = "You must enter all fields";
    } else {
        $sql = "SELECT * FROM admin WHERE userName = '$name' AND passWord = '$password'";
        $query = mysql_query($sql);
 
        if ($query === false) {
            echo "Could not successfully run query ($sql) from DB: " . mysql_error();
            exit;
        }
 
        if (mysql_num_rows($query) --------> 0) {
          
            header('Location: YOUR_LOCATION');
            exit;
        }
 
        $msg = "Username and password do not match";
    }
}
?>
</body>
</html>