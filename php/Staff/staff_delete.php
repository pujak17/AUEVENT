<!DOCTYPE html>
<?php include('staff_index.php') ?>
<body>
<div class="main">
<div class="buttons"><br>
                <div class="button btn-group-lg" align="center">
                        <a href="staff_index.php" class="btn btn-primary btn-lg active"> Recent Events </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="staff_pastevent.php" class="btn btn-default btn-lg active"> Past Events</a>
                        <br>
                        <br>
   
                </div>           
</div>
    

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