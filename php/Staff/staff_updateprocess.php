<?php include('staff_index.php') ?>
<style>
.success{color : #27AE60;
    font-weight: bold;
    font-size: 20px;}
.success1{
    color : #2E86C1;
    font-weight: bold;
    font-size: 20px
}
</style>
<?php session_start();?><?php 
if(isset($_SESSION['valid'])) {
    if (isset($_GET['edit'])) {
        $Event_Id = $_GET['edit'];
        echo($Event_Id);
    include('include.php');

    $ID = $_SESSION['valid'];
    
    $event_name = $_POST["eventName"];
    $event_date = $_POST["eventDate"];
    $event_time = $_POST["eventTime"];
    $event_venue = $_POST["eventVenue"];
    $event_type =  $_POST["eventType"];
    $event_description = $_POST["description"];
    $event_link = $_POST["link"];
    $dress_code = $_POST["DressCode"];
    $enterance_cost = $_POST["Cost"]; 
    $enterance_cost = $_POST["Cost"]; 
    $required_number = $_POST["required"]; 
    $about = $_POST["About"];
    $faculty_type = $_POST["faculty"];

    ?><br><br><br><div class ="box" align = "center"> <?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
   
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";

    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            ?>
             
            <?php $file = basename($_FILES["fileToUpload"]["name"]); 
            $sql = "UPDATE EVENT SET Admin_Id = '$ID', Event_name ='$event_name' , Event_venue = '$event_venue' , Event_date = '$event_date', Event_time = '$event_time', Event_description = '$event_description', Event_link = '$event_link', Event_photo = '$file', Date_create = DEFAULT WHERE Event_Id = $Event_Id";
          ?>
           
            <?php
            if ($conn->query($sql) === TRUE) {
                ?> <h3><span class = "success">  Event has been updated successfully  </span></h3>
                <?php
                    if ($event_type == 'Mandatory') {
                        $sql = "UPDATE MANDATORY SET  Dress_code = '$dress_code' WHERE Event_Id = $Event_Id";
    
                            if ($conn->query($sql) === TRUE) {
                                ?> <h3><span class = "success1">  Event has been updated into Mandatory </span></h3>
                               <?php
                            } else {
    
                                echo "Error: ". $sql . "<br" . $conn->error;
                            }
                        
                     } else if ($event_type == 'Entertainment'){

                        $sql = "UPDATE ENTERTAINMENT SET  Entrance_cost = '$enterance_cost' WHERE Event_Id = $Event_Id";
    
                        if ($conn->query($sql) === TRUE) {
                            ?> <h3><span class = "success1"> Event has been updated into Entertainment  </span></h3>
                            <?php
                        } else {
    
                            echo "Error: ". $sql . "<br" . $conn->error;
                        }
    
                     } else if ($event_type == 'Volunteer') {
                        $sql = "UPDATE VOLUNTEER SET  Required_number = '$required_number' WHERE Event_Id = $Event_Id";

    
                        if ($conn->query($sql) === TRUE) {
                          ?> <h3><span class = "success1"> Event has been updated into Volunteer </span></h3>
                          <?php
                        } else {
    
                            echo "Error: ". $sql . "<br" . $conn->error;
                        }
                     
                     } else if ($event_type == 'Others') {
                        $sql = "UPDATE OTHERS SET  About = '$about' WHERE Event_Id = $Event_Id";

                        if ($conn->query($sql) === TRUE) {
                            ?> <h3><span class = "success1"> Event has been updated into Other </span></h3>
                            <?php
                        } else {
    
                            echo "Error: ". $sql . "<br" . $conn->error;
                        }
                     } else if ($event_type == 'Faculty') {
                        $sql = "UPDATE OTHERS SET  Faculty_type = '$faculty_type' WHERE Event_Id = $Event_Id";
    
                        if ($conn->query($sql) === TRUE) {
                            ?> <h3><span class = "success1"> Event has been updated into Faculty </span></h3>
                           <?php
                        } else {
    
                            echo "Error: ". $sql . "<br" . $conn->error;
                        }
                     } ?>
                     <br> <a href="staff_myevent.php" class="btn btn-success btn-lg active"> Go to My Events</a>
                     <?php
            } else {
                echo ("The catagory does not have any database! Major error!");
                echo "Error : " . $sql . "<br>" . $conn->error;
                    
            }
    
        } else {
            ?><span class = "detail"> Sorry there was an error in updating your file </span> <?php
        }
    }
}
}
    ?> 
    </div>
    </div>
           