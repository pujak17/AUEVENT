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
                        <span class = "detail"> Event link: </span> <span class = "text"><a href="<?php echo $rowi['Event_link'];?>"><?php echo $rowi['Event_link'];?></a></span> <?php
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
                                if($rowi != ""){
                                ?>
                                <br><br><br>
                                <span class = "info"> Event Type: </span><span class = "font">Mandatory<br> 
                                <span class = "info"> Dress Code: </span><span class = "text"><?php echo ($rowi['Dress_code']);?><br>
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
            <div class="button btn-group-lg" align="center"><br>
                <a href="staff_update.php?edit=<?php echo $row['Event_Id']; ?>"  class = "btn btn-success">Update</a> &nbsp;&nbsp;&nbsp;
                <a href="staff_delete.php?del=<?php echo $row['Event_Id']; ?>"  class = "btn btn-danger">Delete</a> &nbsp;&nbsp;&nbsp;
                <a href="staff_details.php?det=<?php echo $row['Event_Id']; ?>"  class = "btn btn-info">Details</a> &nbsp;&nbsp;&nbsp;
            </div>
        </div>
        <?php }   ?>     

<?php }?>