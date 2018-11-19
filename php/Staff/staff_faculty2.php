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
.buttons { 
    margin-left: 200px;
    margin-top: 30px;
    padding-top: 20px;
}
.font1{
    color: #CD5C5C;
    font-size: 15px;

}
.info3{
    color: #CD5C5C;
    font-size: 20px;

}
.topic{
    color: #CB4335;
    font-size: 25px;
}
</style>
<div class="main">
<div class="Name" align="center"><br><br><br>
<h4><span class = "Name"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>Welcome to Faculty, </span><span class = "Name1"><?php echo ($name); ?> </span></h4>
</div>
<div class="buttons">
                <div class="button btn-group-lg" align="center">
                
                        <a href="staff_home.php" class="btn btn-primary btn-lg active"> Recent Events </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="staff_pastevent.php" class="btn btn-default btn-lg active"> Past Events</a>
                        <br>
                        <br>
   
                </div>           
</div>

<html>
<body><!--
<input type='button' id="button1" value='first button' onclick="clickMe(this)"/>
<input type='button' id="button2" value='second button' onclick="clickMe(this)"/>
<input type='button' id="button3" value='third button' onclick="clickMe(this)"/>
<input type='button' id="button4" value='fourth button' onclick="clickMe(this)"/>
 
<script>
function clickMe(e){
    var value = +document.getElementById(e.id).value;
    document.cookie = "value = " + value
 
}
</script>
<h1> 
-->
</body>
</html>


<?php
  //$value = $_COOKIE['value'];
  $sqli0 = "SELECT * FROM FACULTY ORDER BY Faculty_type"; 
  $resulti0 = $conn->query($sqli0);
  while ($rowi0 = mysqli_fetch_array($resulti0)) { 
  $event_Id = $rowi0['Event_Id'];
  ?>
  
<br>

  <?php

$sqli = "SELECT * FROM EVENT WHERE Event_Id = $event_Id"; 
$resulti = $conn->query($sqli);
$rowi = mysqli_fetch_assoc($resulti);
$IDi = $rowi['Event_Id'];?>
<div style="text-align: left;">
    <span class = "topic">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rowi0['Faculty_type'] ?></span>


<div class ="box text-center">
<span class = "font1"> <?php echo $rowi['Date_create']; ?></span>
<div class="row">
      <div class="column">
         <span class = "detail"> &nbsp;&nbsp;&nbsp;Event name: </span><span class = "text"><?php echo $rowi['Event_name']; ?></span><br>
         <span class = "detail"> Event Venue: </span><span class = "text"><?php echo $rowi['Event_venue']; ?> </span><br>
         <span class = "detail"> Event Time: </span><span class = "text"><?php echo $rowi['Event_time']; ?> </span><br>
         <span class = "detail"> Event Date: </span><span class = "text"><?php echo $rowi['Event_date']; ?> </span><br>
         <span class = "detail"> Event Description: </span><span class = "text"><?php echo $rowi['Event_description']; ?> </span><br>
         <span class = "detail"> Event link: </span> <span class = "text"><a href="<?php echo $rowi['Event_link'];?>"><?php echo $rowi['Event_link'];?></a></span> <?php
         $upload =   $rowi['Event_photo'];
         $Event_Id = $rowi['Event_Id'];
         ?>
     </div>
     <div class="column">
     <td><img class = "resize" src="uploads/<?php echo $upload ?>"> <br>
     <span class = "info"> Event Type: </span><span class = "font">Faculty<br> 
        <span class = "info"> Faculty_type: </span><span class = "text"><?php echo ($rowi0['Faculty_type']);?> <?php
                              
                           ?>

</div>
</div>
</div>
<br>
<?php }
    echo ('invalid ');
}?>