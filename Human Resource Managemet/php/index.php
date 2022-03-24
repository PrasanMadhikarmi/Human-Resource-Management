<?php 
#fetching the data from the user using post method
$username = $POST['text'];
$password = $POST['password'];
#connecting to database 
$servername = "localhost";
$servername ="root";
$password ="ronaldofan123";
$database ="hrm";

$mysqli = new mysql($host,$servername,$password,$database);

if ($mysqli -> connect_errno) {    
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }

$result = mysql_query("Select * from admin where Admin_Name = '$username' and Password = '$password")
    or die("Failed to connect to query database".mysql_error());
$row = mysql_fetch_array($result);
?>
