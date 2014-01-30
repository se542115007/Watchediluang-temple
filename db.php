<?php
//connect to the server
$link = mysql_connect('localhost', 'root', ''); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
}

//connect to the database
mysql_select_db(product_index); 

//query the database
$query = mysql_query("SELECT * FROM admin ");

//fetch the results / convert results into an array

        WHILE($rows = mysql_fetch_array($query)):
        
            $product_name = $rows['id'];
            $id = $rows['userName'];
            $description = $rows['passWord'];
           
        
        echo "$product_name<br>$description<br>$price<br>$image_large<br>$image_thumb<br>$page_link<br>$purchase_link<br><br><br>";
        
        endwhile;
?>