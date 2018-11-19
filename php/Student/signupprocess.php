<?php
include 'include.php';
$ID = $_POST["userId"];
$fullName = $_POST["fullName"];
$major = $_POST["major"];
$faculty = $_POST["faculty"];
$Student_password = $_POST["password"];
$sql = "INSERT INTO STUDENT (Student_Id, Full_name, Faculty, Major, Student_password)
    VALUES ('$ID', '$fullName', '$faculty','$major', '$Student_password')";
if ($conn->query($sql) === true) {
    echo "<br> new record has been created successfully<br><br>";
    header('location:login.php');
} else {
    echo "Error: " . $sql . "<br" . $conn->error;
}
