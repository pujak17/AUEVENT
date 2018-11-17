<?php 
    include('include.php');
    $ID = $_POST["userId"];
    $fullName = $_POST["fullName"];
    $email_Id = $_POST["email_Id"];
    $password = $_POST["password"];
    $Admin_number = $_POST["Phone_Number"];
    
    $sql = "INSERT INTO ADMIN_PROFILE (Admin_Id, Admin_name, Admin_email, Admin_password)
    VALUES ('$ID', '$fullName', '$email_Id','$password')";

        if($conn->query($sql) === TRUE) {
            echo "<br> new record has been created successfully<br><br>";
            
            }else{
                echo "Error: ". $sql . "<br" . $conn->error;
            }
            
     
$sql = "INSERT INTO ADMIN_PHONE (Admin_Id, Admin_number) VALUES ('$ID', '$Admin_number') ";
if($conn->query($sql) === TRUE) {
    echo "<br> new record has been created successfully<br><br>";
    header('location:Staff_login.php');
    }else{
        echo "Error: ". $sql . "<br" . $conn->error;
    }
        ?>