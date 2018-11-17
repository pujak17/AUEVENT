<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname  = "practice1";
$update = false;

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn-> connect_error) {
    die ("<br>&nbsp;&nbsp;connection problem :<br> " . $conn -> connect_error);
} else {
    echo ("<br>&nbsp;&nbsp;You are connected to mySQL!!<br>");
}

?>