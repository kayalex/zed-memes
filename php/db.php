<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zedmemes";

try {
    
    $conn = new mysqli($servername, $username, $password, $dbname);   

} catch (mysqli_sql_exception) {
   
    die("Connection failed. Something went wrong");
}
?>
