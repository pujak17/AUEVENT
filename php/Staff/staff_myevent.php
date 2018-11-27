<?php include('staff_index.php');?>
<?php session_start();?>
<style>
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
    width:70%;
    border-radius: 20px;
    margin-top: 30px;
    padding-bottom: 50px;
    padding-top: 50px;
    margin-left:320px;
}
.column {
    float: left;
    width: 50%;
    padding: 15px;
}

</style>
<?php
  include('include.php');
?>

<?php
    if(isset($_SESSION['valid'])) {
        $ID = $_SESSION['valid'];
        $sql = "SELECT * FROM EVENT WHERE Admin_Id = '$ID' ORDER BY Date_create DESC"; 
        $result = $conn->query($sql);
       
       
        
?>      
         <br>
        <br>
        <br><br>
        <div class = "align-center"><br><br><br>
        <span class = "info3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Admin Id: </span>
        <span class = "info"><?php echo $ID ?> <br></span>
        </div>
        <?php
        
      
       while ($row = mysqli_fetch_array($result)){ 
        ?>
        
        <div class ="box text-center">
        <span class = "font1"> <?php echo $row['Date_create']; ?></span>
            <div class="row">
                    <div class="column">
                        <br>
                        <span class = "detail"> Event Name: </span><span class = "text"><?php echo $row['Event_name']; ?> </span><br>
                        <span class = "detail"> Event Venue: </span><span class = "text"><?php echo $row['Event_venue']; ?> </span><br>
                        <span class = "detail"> Event Time: </span><span class = "text"><?php echo $row['Event_time']; ?> </span><br>
                        <span class = "detail"> Event Date: </span><span class = "text"><?php echo $row['Event_date']; ?> </span><br>
                        <span class = "detail"> Event Description: </span><span class = "text"><?php echo $row['Event_description']; ?> </span><br>
                        <span class = "detail"> Event link: </span> <span class = "text"><a href="<?php echo $row['Event_link'];?>"><?php echo $row['Event_link'];?></a></span> <?php
                        $Event_Id = $row['Event_Id'];

                        $upload =   $row['Event_photo'];
                        ?>
                    </div>
                    <div class="column">
                    <td><img class = "resize" src="uploads/<?php echo $upload ?>"> 

                                <?php      
                                $sqli = "SELECT * FROM MANDATORY WHERE Event_Id='$Event_Id'"; 
                                $resulti = $conn->query($sqli);
                                $rowi = mysqli_fetch_assoc($resulti);

                                $sqli1 = "SELECT * FROM VOLUNTEER WHERE Event_Id='$Event_Id'"; 
                                $resulti1 = $conn->query($sqli1);
                                $rowi1 = mysqli_fetch_assoc($resulti1);

                                $sqli2 = "SELECT * FROM OTHERS WHERE Event_Id='$Event_Id'"; 
                                $resulti2 = $conn->query($sqli2);
                                $rowi2 = mysqli_fetch_assoc($resulti2);

                                $sqli3 = "SELECT * FROM FACULTY WHERE Event_Id='$Event_Id'"; 
                                $resulti3 = $conn->query($sqli3);
                                $rowi3 = mysqli_fetch_assoc($resulti3); 

                                $sqli4 = "SELECT * FROM ENTERTAINMENT WHERE Event_Id='$Event_Id'"; 
                                $resulti4 = $conn->query($sqli4);
                                $rowi4 = mysqli_fetch_assoc($resulti4);

                                if($rowi != ""){
                                ?>
                                <br><br><br>
                                <span class = "info"> Event Type: </span><span class = "font">Mandatory<br> 
                                <span class = "info"> Dress Code: </span><span class = "text"><?php echo ($rowi['Dress_code']);?><br>
                                <?php
                                } 
                                
                                
                                if($rowi1 != ""){
                                ?>
                                <br><br><br>
                                <span class = "info"> Event Type: </span><span class = "font">Volunteer<br>
                                <span class = "info"> Required number: </span><span class = "text"><?php echo ($rowi1['Required_number']);?><br> 
                                <?php
                                }

                                if($rowi2 != ""){
                                ?>
                                <br><br><br>
                                <span class = "info"> Event Type: </span><span class = "font">Others<br> 
                                <span class = "info"> About: </span><span class = "text"><?php echo ($rowi2['About']);?><br> 
                                <?php
                                }

                              
                                if($rowi3 != ""){ 
                                ?>
                                <br><br><br>
                                <span class = "info"> Event Type: </span><span class = "font">Faculty<br> 
                                <span class = "info"> Faculty type: </span><span class = "text"><?php echo ($rowi3['Faculty_type']);?><br>  
                                <?php
                                }
                                
                          
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
            <div class="button btn-group-lg" align="center"><br>
                <a href="staff_update.php?edit=<?php echo $row['Event_Id']; ?>"  class = "btn btn-success">Update</a> &nbsp;&nbsp;&nbsp;
                <a href="staff_delete.php?del=<?php echo $row['Event_Id']; ?>"  class = "btn btn-danger">Delete</a> &nbsp;&nbsp;&nbsp;
                <a href="staff_details.php?det=<?php echo $row['Event_Id']; ?>"  class = "btn btn-info">Details</a> &nbsp;&nbsp;&nbsp;
            </div>
        </div>
        <?php }   ?>     

<?php }?>