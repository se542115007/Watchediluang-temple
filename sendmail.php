<html>
<?php
$to = "pondinpond@hotmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "mac.nursekab@gmail.com";
mail($to,$subject,$message,"From: $from");
echo "The email has been sent.";
?>
</html>