<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname  = "AU_EVENTS";
$update = false;

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn-> connect_error) {
    die ("<br>&nbsp;&nbsp;connection problem :<br> " . $conn -> connect_error);
} else {
    echo "<script>console.log('You are connected to mySQL!');</script>";
}

?>