<!DOCTYPE html>
<?php include('staff_index.php') ?>
<body>
    
        <div class ="box" align = "center">
            <span class = "details"> &nbsp; &nbsp; &nbsp;Event name  : </span><span class = "text"><?php echo $_GET["eventName"]; ?></span><br>
            <span class = "details"> &nbsp; &nbsp; &nbsp;Event Date : </span><span class = "text"><?php echo $_GET["eventDate"]; ?></span><br>
            <span class = "details"> &nbsp; &nbsp; &nbsp;Event Venue : </span><span class = "text"><?php echo $_GET["eventVenue"]; ?></span><br>
            <span class = "details"> &nbsp; &nbsp; &nbsp;Description : </span><span class = "text"><?php echo $_GET["description"]; ?></span><br>
            <span class = "details"> &nbsp; &nbsp; &nbsp;link: </span><span class = "text"><a href = "<?php echo $_GET["link"]; ?>">  <?php echo $_GET["link"]; ?> </a></span><br><br>
            <div class="button btn-group-lg" align="center">
                <button name="submit" value="submit" type="submit" class="btn btn-success"> Update</button> &nbsp;&nbsp;&nbsp;
                <button name="submit" value="submit" type="submit" class="btn btn-danger"> Delete</button> &nbsp;&nbsp;&nbsp;
                <a href = "details.php" class="btn btn-info"> Details</a>
            </div>
       </div>
   </div>
</body>