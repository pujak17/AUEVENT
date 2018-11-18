<?php 
    include('include.php');
    $ID = $_POST["userId"];
    $fullName = $_POST["fullName"];
    $major = $_POST["major"];
    $faculty=$_POST["faculty"];
    $password = $_POST["password"];
    $sql = "INSERT INTO STUDENT (Student_Id, Full_name, Faculty, Major, Password)
    VALUES ('$ID', '$fullName', '$faculty','$major', '$password')";

        if($conn->query($sql) === TRUE) {
            echo "<br> new record has been created successfully<br><br>";
            header('location:login.php');
            }else{
                echo "Error: ". $sql . "<br" . $conn->error;
            }
        ?>