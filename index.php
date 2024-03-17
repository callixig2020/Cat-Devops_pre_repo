<?php


// Create connection
$conn = new mysqli('mysql_db','root', 'mysqli');

// Check connection
if ($conn){
    echo "Connected successfully !!!";
}

?>