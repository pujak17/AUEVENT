<?php include('staff_index.php');?>
<?php session_start();?>
<?php
    if(isset($_SESSION['valid'])) {
        
        include('include.php');
        $ID = $_SESSION['valid'];
        $sql = "SELECT * FROM ADMIN_PROFILE WHERE Admin_Id='$ID'"; 
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
        print_r($row);
       
        $name = $row['Admin_name'];
    
    ?> 
    <style>
.Name{color : #EC7063;
    font-weight: bold;
    font-size: 20px;}

.Name1{color : #55447C;
    font-weight: bold;
    font-size: 22px;}
    </style>
<div class="main">
<div class="Name" align="left"><br>
<h4><span class = "Name"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>Welcome back to AUEvents, </span><span class = "Name1"><?php echo ($name); ?> </span></h4>
</div>
<div class="buttons">
                <div class="button btn-group-lg" align="center">
                
                        <a href="staff_home.php" class="btn btn-primary btn-lg active"> Recent Events </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="staff_pastevent.php" class="btn btn-default btn-lg active"> Past Events</a>
                        <br>
                        <br>
   
                </div>           
</div>

<div class ="box text-center">
<div class="row">
      <div class="column">
         <span class = "detail"> &nbsp;&nbsp;&nbsp;Event name: </span><span class = "text">Wai Kru Ceremony</span><br>
         <span class = "detail">&nbsp;&nbsp;&nbsp;Event type : </span><span class = "text">Mandatory</span><br>
         <span class = "detail">&nbsp;&nbsp;&nbsp;Event Date : </span><span class = "text">15th oct 2018</span><br>
         <span class = "detail">&nbsp;&nbsp;&nbsp;Event Venue : </span><span class = "text">John Paul XXI</span><br>
         <span class = "detail">&nbsp;&nbsp;&nbsp;Description: </span><span class = "text">It's a program for freshman from ID 591 and teachers of ABAC</span><br>
         <span class = "detail">&nbsp;&nbsp;&nbsp;link: </span><span class = "text"><a href = "https://www.w3schools.com/tags/att_input_type.asp">click here for link</a></span><br><br>
     </div>
     <div class="column">
     <img src = "http://www.au2014.au.edu/index.php/au-gallery-2015/image?view=image&format=raw&type=img&id=13026" alt = "waikru" style="width:302px;height:152px;border:0;">
     </div>
     </div>
     
 </div>    

 
 <div class ="box text-center">
 <div class="row">
      <div class="column">
     <span class = "detail"> &nbsp;&nbsp;&nbsp;Event name: </span><span class = "text">Ethics Seminar</span><br>
     <span class = "detail">&nbsp;&nbsp;&nbsp;Event type : </span><span class = "text">Mandatory</span><br>
     <span class = "detail">&nbsp;&nbsp;&nbsp;Event Date : </span><span class = "text">10th oct 2018</span><br>
     <span class = "detail">&nbsp;&nbsp;&nbsp;Event Venue : </span><span class = "text">CL14</span><br>
     <span class = "detail">&nbsp;&nbsp;&nbsp;Description: </span><span class = "text">Students having BG1403X needs to attend this event</span><br>
     <span class = "detail">&nbsp;&nbsp;&nbsp;link: </span><span class = "text"><a href = "https://www.w3schools.com/tags/att_input_type.asp">click here for link</a></span><br><br>
     </div>
     <div class="column">
     <img src = "https://www.glurr.com/images/topic/0774975001489767079.jpg" alt = "ethics" style="width:302px;height:152px;border:0;"><br>
     </div>
     </div>
     
</div>
<div class ="box text-center">
<div class="row">
        <div class="column">
        <span class = "detail"> &nbsp;&nbsp;&nbsp;Event name: </span><span class = "text">Freshy Night</span><br>
        <span class = "detail">&nbsp;&nbsp;&nbsp;Event type : </span><span class = "text">Entertainment</span><br>
        <span class = "detail">&nbsp;&nbsp;&nbsp;Event Date : </span><span class = "text">6th oct 2018</span><br>
        <span class = "detail">&nbsp;&nbsp;&nbsp;Event Venue : </span><span class = "text">John Paul XXI</span><br>
        <span class = "detail">&nbsp;&nbsp;&nbsp;Description: </span><span class = "text">It's a program for freshman from ID 591 where students get 
            to eat, enjoy the show and also dance</span><br>  
        <span class = "detail">&nbsp;&nbsp;&nbsp;link: </span><span class = "text"><a href = "https://www.w3schools.com/tags/att_input_type.asp">link</a></span><br><br>
        </div>
        <div class="column">
                    <img src = "http://www.au.edu/images/gallery//gallery2017/freshy2017/freshy2017-001.JPG" alt = "waikru" style="width:75%;">
                </div>
        </div>
       </div>

<div class ="box text-center">
   <div class="row">
        <div class="column">
        <span class = "detail"> &nbsp;&nbsp;&nbsp;Event name: </span><span class = "text">Career Week</span><br>
        <span class = "detail">&nbsp;&nbsp;&nbsp;Event type : </span><span class = "text">Others</span><br>
        <span class = "detail">&nbsp;&nbsp;&nbsp;Event Date : </span><span class = "text">5th oct 2018</span><br>
        <span class = "detail">&nbsp;&nbsp;&nbsp;Event Venue : </span><span class = "text">CL</span><br>
        <span class = "detail">&nbsp;&nbsp;&nbsp;Description: </span><span class = "text">It's a program for all students of abac looking for jobs and internship</span><br>
        <span class = "detail">&nbsp;&nbsp;&nbsp;link: </span><span class = "text"><a href = "https://www.w3schools.com/tags/att_input_type.asp">link</a></span><br><br>
        </div>
  <div class="column">  
        <img src = "http://www.au.edu/images/image2018/careerWeek2-201701.png" alt = "waikru" style="width:75%;">
  </div>     
</div>

</div>
<?php } else {
    echo ('invalid ');
}?>