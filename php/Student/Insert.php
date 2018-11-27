<?php include('index.php') ?>
<!DOCTYPE HTML>
<?php session_start();?>
<?php
include('include.php');
if(isset($_SESSION['valid'])) {
    include('include.php');
        $ID = $_SESSION['valid'];
        if (isset($_GET['myevent'])) {
          $Event_Id = $_GET['myevent'];
          $sql = "INSERT INTO ATTENDS (Student_Id, Event_Id)
          VALUES ('$ID', '$Event_Id')";

        if($conn->query($sql) === TRUE) {
            echo "<br> new record has been created successfully<br><br>";
            header('location:myevents.php');
            }else{
                ?><br><br><br><br><br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="Name" align="center"><br><br><br>


                <?php
                echo "Error: ". $sql . "<br" . $conn->error;
                ?><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class = "Name"> You are already attending this event!  </span><br><br>
                <a href="home.php" class="btn btn-danger btn-lg active"> Go back</a> 
                </div> <?php
            }
            
        }
    }