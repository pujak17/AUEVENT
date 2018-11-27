<!DOCTYPE html>
<?php include('staff_index.php');?>
<style>
.success{color : #27AE60;
    font-weight: bold;
    font-size: 20px;}
.success1{
    color : #2E86C1;
    font-weight: bold;
    font-size: 20px
}
.main {
     margin-left: 100px; /* Same as the width of the sidenav */
     font-size: 20px; /* Increased text to enable scrolling */
     padding: 0px 50px;
     
 }
.box{
    font-size: 150%;
    border-style: solid;
    background-color:rgb(247, 244, 244, 0.7);
    border-color:  rgb(232, 220, 220, 0.6);
    width:70%;
    border-radius: 20px;
    margin-top: 30px;
    padding-bottom: 50px;
    padding-top: 50px;
    margin-left:230px;
}
.column {
    float: left;
    width: 50%;
    padding: 15px;
}

</style>

<?php session_start();?>
<?php
if(isset($_SESSION['valid'])) {
    include('include.php');
        $ID = $_SESSION['valid'];
        $sql = "SELECT * FROM ADMIN_PROFILE WHERE Admin_Id='$ID'"; 
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
       
       
        $ID = $row['Admin_Id'];
        
       
        
}
$ID = $row['Admin_Id'];   
$event_name = $_POST["eventName"];
$event_date = $_POST["eventDate"];
$event_time = $_POST["eventTime"];
$event_venue = $_POST["eventVenue"];
$event_type =  $_POST["eventType"];
$event_description = $_POST["description"];
$event_link = $_POST["link"];
$dress_code = $_POST["DressCode"];
$enterance_cost = $_POST["Cost"];  
/*
echo ($event_type); 
echo ($enterance_cost);
echo($event_date );
echo($event_description);
*/
$enterance_cost = $_POST["Cost"]; 
$required_number = $_POST["required"]; 
$about = $_POST["About"];
$faculty_type = $_POST["faculty"];
echo($ID);
?>


<body>
<div class="main">
<div class="buttons"><br>
                <div class="button btn-group-lg" align="center">
                        <a href="staff_home.php" class="btn btn-primary btn-lg active"> Recent Events </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="staff_pastevent.php" class="btn btn-default btn-lg active"> Past Events</a>
                        <br>
                        <br>
   
                </div>           
</div>
    
        <div class ="box" align = "center">
        <!--<div class="row">
       
        <div class="column">
            <?php
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
// Check if file already exists

// Check file size

// Allow certain file formats
##if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
##&& $imageFileType != "gif" ) {
 ##   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  ##  $uploadOk = 0;
##}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        #echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        ?>
         <!-- <img class = "resize" src="uploads/<?php //echo basename( $_FILES["fileToUpload"]["name"])?> "> -->
        <?php $file = basename($_FILES["fileToUpload"]["name"]); 
          
         $sql = "INSERT INTO EVENT (Event_Id, Admin_Id, Event_name, Event_venue, Event_date, Event_time, Event_description, Event_link, Event_photo, Date_create)
         VALUES (DEFAULT,'$ID', '$event_name', '$event_venue', '$event_date', '$event_time','$event_description', '$event_link', '$file', DEFAULT)";?>
       
        <?php
        if ($conn->query($sql) === TRUE) {
            ?> <h3><span class = "success"> New Event has been created successfully  </span></h3>
            <?php
                if ($event_type == 'Mandatory') {
                    
                    $sql = "INSERT INTO MANDATORY (Event_Id, Dress_code) 
                    VALUES (LAST_INSERT_ID(),'$dress_code')";

                        if ($conn->query($sql) === TRUE) {
                            ?> <h3><span class = "success1"> New Event has been added into Mandatory </span></h3>
                           <?php
                        } else {

                            echo "Error: ". $sql . "<br" . $conn->error;
                        }
                    
                 } else if ($event_type == 'Entertainment'){
                       
                    $sql = "INSERT INTO ENTERTAINMENT (Event_Id, Entrance_cost) 
                    VALUES (LAST_INSERT_ID(),'$enterance_cost')";

                    if ($conn->query($sql) === TRUE) {
                        ?> <h3><span class = "success1"> New Event has been added into Entertainment  </span></h3>
                        <?php
                    } else {

                        echo "Error: ". $sql . "<br" . $conn->error;
                    }

                 } else if ($event_type == 'Volunteer') {
                    $sql = "INSERT INTO VOLUNTEER (Event_Id, Required_number) 
                    VALUES (LAST_INSERT_ID(),'$required_number')";

                    if ($conn->query($sql) === TRUE) {
                      ?> <h3><span class = "success1"> New Event has been added into Volunteer  </span></h3>
                      <?php
                    } else {

                        echo "Error: ". $sql . "<br" . $conn->error;
                    }
                 
                 } else if ($event_type == 'Others') {
                    $sql = "INSERT INTO OTHERS (Event_Id, About) 
                    VALUES (LAST_INSERT_ID(), '$about')";

                    if ($conn->query($sql) === TRUE) {
                        ?> <h3><span class = "success1"> New Event has been added into Other </span></h3>
                        <?php
                    } else {

                        echo "Error: ". $sql . "<br" . $conn->error;
                    }
                 } else if ($event_type == 'Faculty') {
                    $sql = "INSERT INTO FACULTY (Event_Id, Faculty_type) 
                    VALUES (LAST_INSERT_ID(), '$faculty_type')";

                    if ($conn->query($sql) === TRUE) {
                        ?> <h3><span class = "success1"> New Event has been added into Faculty </span></h3>
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
        ?><span class = "detail"> Sorry there was an error in uploading your file </span> <?php
    }
}

?> 
</div>
</div>