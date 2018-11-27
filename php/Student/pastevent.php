<?php include('index.php') ?>



<?php session_start();?>
<?php
    if(isset($_SESSION['valid'])) {
        
        include('include.php');
        $ID = $_SESSION['valid'];
        $sql = "SELECT * FROM STUDENT WHERE Student_Id='$ID'"; 
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
        print_r($row);
        
        $name = $row['Full_name'];

?>      
  
<style>
.font{
    color: #910000;
    font-size: 20px;

}
.resize {
    width: 300px;
    height: auto;
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
.detail3{
    color: #CD5C5C;
    font-size: 20px;

}
.detail {
    color: #37406B;
    font-weight: bold;
    font-size: 20px;

}
.box {
    font-size: 150%;
    border-style: solid;
    background-color:rgb(235, 237, 244, 0.3);
    border-color:  rgb(235, 237, 244, 0.7);
    width: 70%;
    border-radius: 20px;
    margin-top: 30px;
    padding-bottom: 50px;
    padding-top: 50px;

    margin-left:230px;
}
</style>

<div class="main">

<div class="Name" align="center"><br><br><br>
<h4><span class = "Name"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>Past Events, </span><span class = "Name1"><?php echo ($name); ?> </span></h4>
</div>

<div class="buttons">

                <div class="button btn-group-lg" align="center">
                
                        <a href="home.php" class="btn btn-primary btn-lg active"> Recent Events </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="pastevent.php" class="btn btn-default btn-lg active"> Past Events</a>
                        <br>
                        <br>
   
                </div>           
</div>

<?php 
$sqli = "SELECT * FROM EVENT ORDER BY Date_create ASC LIMIT 10"; 
$resulti = $conn->query($sqli);
$IDi = $rowi['Event_Id'];
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
                                $sqli0 = "SELECT * FROM MANDATORY WHERE Event_Id='$Event_Id' ORDER BY date_create"; 
                                $resulti0 = $conn->query($sqli0);
                                $rowi0 = mysqli_fetch_assoc($resulti0);
                                if($rowi0 != ""){
                                ?>
                                <br><br><br>
                                <span class = "detail"> Event Type: </span><span class = "font">Mandatory<br> 
                                <span class = "detail"> Dress Code: </span><span class = "text"><?php echo ($rowi0['Dress_code']);?><br>
                                <?php
                                }
                                
                                $sqli1 = "SELECT * FROM VOLUNTEER WHERE Event_Id='$Event_Id'"; 
                                $resulti1 = $conn->query($sqli1);
                                $rowi1 = mysqli_fetch_assoc($resulti1);
                                if($rowi1 != ""){
                                ?>
                                <br><br><br>
                                <span class = "detail"> Event Type: </span><span class = "font">Volunteer<br>
                                <span class = "detail"> Required number: </span><span class = "text"><?php echo ($rowi1['Required_number']);?><br> 
                                <?php
                                }

                                $sqli2 = "SELECT * FROM OTHERS WHERE Event_Id='$Event_Id'"; 
                                $resulti2 = $conn->query($sqli2);
                                $rowi2 = mysqli_fetch_assoc($resulti2);
                                if($rowi2 != ""){
                                ?>
                                <br><br><br>
                                <span class = "detail"> Event Type: </span><span class = "font">Others<br> 
                                <span class = "detail"> About: </span><span class = "text"><?php echo ($rowi2['About']);?><br> 
                                <?php
                                }

                                $sqli3 = "SELECT * FROM FACULTY WHERE Event_Id='$Event_Id'"; 
                                $resulti3 = $conn->query($sqli3);
                                $rowi3 = mysqli_fetch_assoc($resulti3);
                                if($rowi3 != ""){ 
                                ?>
                                <br><br><br>
                                <span class = "detail"> Event Type: </span><span class = "font">Faculty<br> 
                                <span class = "detail"> Faculty type: </span><span class = "text"><?php echo ($rowi3['Faculty_type']);?><br>  
                                <?php
                                }
                                
                                $sqli4 = "SELECT * FROM ENTERTAINMENT WHERE Event_Id='$Event_Id'"; 
                                $resulti4 = $conn->query($sqli4);
                                $rowi4 = mysqli_fetch_assoc($resulti4);
                                if($rowi4 != ""){ 
                                ?>
                                <br><br><br>
                                <span class = "detail"> Event Type: </span><span class = "font">Entertainment<br> 
                                <span class = "detail"> Entrance cost: </span><span class = "text"><?php echo ($rowi4['Entrance_cost']);?><br> 
                                <?php 
                                } 
                                ?>    

    </div>
    
    </div>                     
            
                                <?php $sqli5 = "SELECT * FROM ATTENDS WHERE Event_Id='$Event_Id'"; 
                                $resulti5 = $conn->query($sqli5);
                                $rowi5 = mysqli_fetch_assoc($resulti5);
                                $StudentId = $rowi5['Student_Id'];
                                $EventId = $rowi5['Event_Id']; 

                                if($ID = $StudentId && $Event_Id = $EventId) {
                                ?><br><br>

                                
                                <a href="#" class="btn btn-warning btn-lg disabled" role="button" aria-disabled="true">Attending</a>
                                <?php } else { ?>
                                <a href="Insert.php?myevent=<?php echo $rowi['Event_Id']; ?>" type="button" class = "btn btn-lg btn-success">Attend</a>  
                                <?php }?>
                               
            
                               
    
</div>
<?php }
    
}?>


      
    