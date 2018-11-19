<!DOCTYPE html>

<?php session_start();?>
<?php
include 'include.php';
if (isset($_SESSION['valid'])) {
    include 'include.php';
    $ID = $_SESSION['valid'];
    $sql = "SELECT * FROM ADMIN_PROFILE WHERE Admin_Id='$ID'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);

    $ID = $row['Admin_Id'];
    //echo ($ID);

}
$ID = $row['Admin_Id'];
$event_name = $_POST["eventName"];
$event_date = $_POST["eventDate"];
$event_time = $_POST["eventTime"];
$event_venue = $_POST["eventVenue"];
$event_type = $_POST["eventType"];
$event_description = $_POST["description"];
$event_link = $_POST["link"];
$dress_code = $_POST["DressCode"];
$enterance_cost = $_POST["Cost"]; /*
echo ($dress_code);
echo ($enterance_cost);
echo($event_date );
echo($event_description);
exit;*/
$enterance_cost = $_POST["Cost"];
$required_number = $_POST["required"];
$about = $_POST["eventType"];
$faculty_type = $_POST["faculty"];

if ($event_type == 'Mandatory') {
    $sql = "INSERT INTO MANDATORY (Event_Id, Dress_code)
    VALUES (DEFAULT,'$dress_code')";
} else if ($event_type == 'Entertainment') {
    $sql = "INSERT INTO Entertainment (Event_Id, Enterance_cost)
    VALUES (DEFAULT,'$enterance_cost')";
} else if ($event_type == 'Volunteer') {
    $sql = "INSERT INTO Entertainment (Event_Id, Enterance_cost)
    VALUES (DEFAULT,'$required_number')";
} else if ($event_type == 'Volunteer') {
    $sql = "INSERT INTO Entertainment (Event_Id, Enterance_cost)
    VALUES (DEFAULT,'$required_number')";
} else if ($event_type == 'Volunteer') {
    $sql = "INSERT INTO Entertainment (Event_Id, Enterance_cost)
    VALUES (DEFAULT,'$required_number')";
}
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
        <div class="row">

        <div class="column">
            <?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
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
        <img class = "resize" src="uploads/<?php echo basename($_FILES["fileToUpload"]["name"]) ?> ">
        <?php $file = basename($_FILES["fileToUpload"]["name"]);
        $sql = "INSERT INTO EVENT (Event_Id, Admin_Id, Event_name, Event_venue, Event_date, Event_time, Event_description, Event_link, Event_photo, Date_create)
         VALUES (DEFAULT,'$ID', '$event_name', '$event_venue', '$event_date', '$event_time','$event_description', '$event_link', '$file', DEFAULT)";?>

        <?php
if ($conn->query($sql) === true) {

            if ($event_type == 'Mandatory') {

                $sql = "INSERT INTO MANDATORY (Event_Id, Dress_code)
                    VALUES (DEFAULT,'$dress_code')";

                if ($conn->query($sql) === true) {
                    echo ('new recored created succesfully');
                } else {

                    echo "Error: " . $sql . "<br" . $conn->error;
                }

            } else if ($event_type == 'Entertainment') {

                $sql = "INSERT INTO ENTERTAINMENT (Event_Id, Enterance_cost)
                    VALUES (DEFAULT,'$enterance_cost')";

                if ($conn->query($sql) === true) {
                    echo ('new recored created succesfully');
                } else {

                    echo "Error: " . $sql . "<br" . $conn->error;
                }
            } else if ($event_type == 'Volunteer') {
                $sql = "INSERT INTO VOLUNTEER (Event_Id, )
                    VALUES (DEFAULT,'$required_number')";

                if ($conn->query($sql) === true) {
                    echo ('new recored created succesfully');
                } else {

                    echo "Error: " . $sql . "<br" . $conn->error;
                }
            }

        } else {
            echo "Error : " . $sql . "<br>" . $conn->error;

        }

    } else {
        ?><span class = "detail"> Sorry there was an error in uploading your file </span> <?php
}
}

?>
</div>
</div>
            <div class="button btn-group-lg" align="center"><br>
                <a href = "staff_update.php" name="submit" value="submit" type="submit" class="btn btn-success"> Update</a> &nbsp;&nbsp;&nbsp;
                <a href = "staff_delete.php" name="submit" value="submit" type="submit" class="btn btn-danger"> Delete</a> &nbsp;&nbsp;&nbsp;
                <a href = "staff_details.php" class="btn btn-info"> Details</a>
            </div>
       </div>
   </div>
</body>

<div class ="box text-center">
<div class="row">
        <div class="column">
            <span class = "detail"> &nbsp;&nbsp;&nbsp;Event name: </span><span class = "text">Freshy Night</span><br>
            <span class = "detail">&nbsp;&nbsp;&nbsp;Event Date : </span><span class = "text">5th oct 2018</span><br>
            <span class = "detail">&nbsp;&nbsp;&nbsp;Event Venue : </span><span class = "text">John Paul XXI</span><br>
            <span class = "detail">&nbsp;&nbsp;&nbsp;Description: </span><span class = "text">It's a program for freshman from ID 591 where students get
                to eat, enjoy the show and also dance</span><br>
            <span class = "detail">&nbsp;&nbsp;&nbsp;link: </span><span class = "text"><a href = "https://www.w3schools.com/tags/att_input_type.asp">link</a></span><br><br>
        </div>
        <div class="column">
            <img src = "http://www.au.edu/images/gallery//gallery2017/freshy2017/freshy2017-001.JPG" alt = "waikru" style="width:75%;">
        </div>
</div>
<div class="button btn-group-lg" align="center"><br>
<a href = "staff_update.php" name="submit" value="submit" type="submit" class="btn btn-success"> Update</a> &nbsp;&nbsp;&nbsp;
                <button name="submit" value="submit" type="submit" class="btn btn-danger"> Delete</button> &nbsp;&nbsp;&nbsp;
                <a href = "staff_details.php" class="btn btn-info"> Details</a>
</div>
</div>
</div>