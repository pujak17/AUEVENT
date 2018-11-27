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
.main {
     margin-left: 300px; /* Same as the width of the sidenav */
     font-size: 20px; /* Increased text to enable scrolling */
     padding: 0px 50px;
     
 }
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
.box{
    font-size: 150%;
    border-style: solid;
    background-color:rgb(247, 244, 244, 0.7);
    border-color:  rgb(232, 220, 220, 0.6);
    width:100%;
    border-radius: 20px;
    margin-top: 30px;
    padding-bottom: 50px;
    padding-top: 50px;
    margin-left:0px;
}
.column {
    float: left;
    width: 50%;
    padding: 15px;
}


</style>
<div class="main">
<div class="Name" align="center"><br><br><br>
<h4><span class = "Name"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>Welcome back to AUEvents, </span><span class = "Name1"><?php echo ($name); ?> </span></h4>
</div>
<div class="buttons">
                <div class="button btn-group-lg" align="center">
                
                        <a href="staff_home.php" class="btn btn-primary btn-lg active"> Recent Events </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="staff_pastevent.php" class="btn btn-default btn-lg active"> Past Events</a>
                        <br>
                        <br>
   
                </div>           
</div>
<?php 
$sqli = "SELECT * FROM EVENT ORDER BY Date_create DESC LIMIT 10"; 
$resulti = $conn->query($sqli);

while ($rowi = mysqli_fetch_array($resulti)) { ?>
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
     <td><img class = "resize" src="../staff/uploads/<?php echo $upload ?>"> 
     <?php      
                                $sqli0 = "SELECT * FROM MANDATORY WHERE Event_Id='$Event_Id'"; 
                                $resulti0 = $conn->query($sqli0);
                                $rowi0 = mysqli_fetch_assoc($resulti0);
                                if($rowi0 != ""){
                                ?>
                                <br><br><br>
                                <span class = "info"> Event Type: </span><span class = "font">Mandatory<br> 
                                <span class = "info"> Dress Code: </span><span class = "text"><?php echo ($rowi0['Dress_code']);?><br>
                                <?php
                                }
                                
                                $sqli1 = "SELECT * FROM VOLUNTEER WHERE Event_Id='$Event_Id'"; 
                                $resulti1 = $conn->query($sqli1);
                                $rowi1 = mysqli_fetch_assoc($resulti1);
                                if($rowi1 != ""){
                                ?>
                                <br><br><br>
                                <span class = "info"> Event Type: </span><span class = "font">Volunteer<br>
                                <span class = "info"> Required number: </span><span class = "text"><?php echo ($rowi1['Required_number']);?><br> 
                                <?php
                                }

                                $sqli2 = "SELECT * FROM OTHERS WHERE Event_Id='$Event_Id'"; 
                                $resulti2 = $conn->query($sqli2);
                                $rowi2 = mysqli_fetch_assoc($resulti2);
                                if($rowi2 != ""){
                                ?>
                                <br><br><br>
                                <span class = "info"> Event Type: </span><span class = "font">Others<br> 
                                <span class = "info"> About: </span><span class = "text"><?php echo ($rowi2['About']);?><br> 
                                <?php
                                }

                                $sqli3 = "SELECT * FROM FACULTY WHERE Event_Id='$Event_Id'"; 
                                $resulti3 = $conn->query($sqli3);
                                $rowi3 = mysqli_fetch_assoc($resulti3);
                                if($rowi3 != ""){ 
                                ?>
                                <br><br><br>
                                <span class = "info"> Event Type: </span><span class = "font">Faculty<br> 
                                <span class = "info"> Faculty type: </span><span class = "text"><?php echo ($rowi3['Faculty_type']);?><br>  
                                <?php
                                }
                                
                                $sqli4 = "SELECT * FROM ENTERTAINMENT WHERE Event_Id='$Event_Id'"; 
                                $resulti4 = $conn->query($sqli4);
                                $rowi4 = mysqli_fetch_assoc($resulti4);
                                if($rowi4 != ""){ 
                                ?>
                                <br><br><br>
                                <span class = "info"> Event Type: </span><span class = "font">Entertainment<br> 
                                <span class = "info"> Entrance cost: </span><span class = "text"><?php echo ($rowi4['Entrance_cost']);?><br> 
                                <?php 
                                } 
                                ?>  
                                
</div>
</div>
</div>
<?php }

}?>