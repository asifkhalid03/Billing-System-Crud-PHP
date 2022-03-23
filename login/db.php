<?php


{define('MYSQL_BOTH',MYSQLI_BOTH);
define('MYSQL_NUM',MYSQLI_NUM);
define('MYSQL_ASSOC',MYSQLI_ASSOC);

$servername = "localhost";
$usrname = "root";
$pasword = "";
$db= "crud";

// Create connection
$conn = new mysqli($servername, $usrname, $pasword,$db);

// Check connection
if ($conn->connect_error) {
    die("DataBase Connection failed: " . $conn->connect_error);
} 
//echo "Database Connected successfully";
//echo '<br/>';
}
 
?>