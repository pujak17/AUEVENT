<!DOCTYPE html>
<?php include('staff_index.php') ?>
<body>
    
        <div class ="box" align = "center">
            <span class = "detail"> &nbsp; &nbsp; &nbsp;Event name  : </span><span class = "text"><?php echo $_GET["eventName"]; ?></span><br>
            <span class = "detail"> &nbsp; &nbsp; &nbsp;Event Date : </span><span class = "text"><?php echo $_GET["eventDate"]; ?></span><br>
            <span class = "detail"> &nbsp; &nbsp; &nbsp;Event Venue : </span><span class = "text"><?php echo $_GET["eventVenue"]; ?></span><br>
            <span class = "detail"> &nbsp; &nbsp; &nbsp;Description : </span><span class = "text"><?php echo $_GET["description"]; ?></span><br>
            <span class = "detail"> &nbsp; &nbsp; &nbsp;link: </span><span class = "text"><a href = "<?php echo $_GET["link"]; ?>">  <?php echo $_GET["link"]; ?> </a></span><br><br>
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
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        #echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        ?>
        <img class = "resize" src="uploads/<?php echo basename( $_FILES["fileToUpload"]["name"]) ?>">
        <?php
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>          
            <div class="button btn-group-lg" align="center"><br>
                <button name="submit" value="submit" type="submit" class="btn btn-success"> Update</button> &nbsp;&nbsp;&nbsp;
                <button name="submit" value="submit" type="submit" class="btn btn-danger"> Delete</button> &nbsp;&nbsp;&nbsp;
                <a href = "details.php" class="btn btn-info"> Details</a>
            </div>
       </div>
   </div>
</body>