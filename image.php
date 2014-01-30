<?php
// Turn of error reporting, as it doesn't really do any
// good in this situation. It may be a good idea, though, to
// enable error logging to a file, so you can still catch errors
// that happen in the code.
ini_set("display_errors", false);
/**
 * Shows an error image and exits the script.
 * @param string $imageName The name of the image file to show.
 */
function showError($imageName="error") {
    $imageFile = "images/{$imageName}.jpg";
    header("Content-Type: image/jpeg");
    header("Content-Length: " . filesize($imageFile));
    readfile($imageFile);
    exit;
}
// connect to the database
include "dbconn.php";
if(isset($_GET['image_id']) && is_numeric($_GET['image_id'])) {
    $id = $_GET['image_id'];
    // Since you store the type with the image, you may as
    // well use it.
    $sql = "SELECT attraction 
            FROM image 
            WHERE id=1";
    $result = mysql_query($sql);
    if ($result) {
        $row = mysql_fetch_assoc($result);
        header("Content-Type: " . $row["type"]);
        header("Content-Length: " . strlen($row["content"]));
        echo $row['content'];
        exit;
    }
    else {
        // Show an error image indicating SQL failure.
        showError("sqlerror");
    }
}
else{
    // Show an error image indicating invalid input.
    showError("inputerror");
}