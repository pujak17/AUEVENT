<?php include('index.php') ?>

<?php session_start();
?>

<?php
    if(isset($_SESSION['valid'])) {
        include('include.php');
        $ID = $_SESSION['valid'];
        echo $ID;
        ?><div class="Name" align="center"><br><br><br>
        <h4><span class = "Name"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>You are attending the following events </span>
        </div>
        <?php
        $sql = "SELECT * FROM ATTENDS WHERE Student_Id = '$ID'"; 
        $result = $conn->query($sql);
        //$row = mysqli_fetch_assoc($result);
        //print_r($row);
        //echo $row['Student_Id'];
        //echo $Event_Id;
        while ($row = mysqli_fetch_array($result)){ 
            $Event_Id = $row['Event_Id'];
            //echo $Event_Id;
            $sqli = "SELECT * FROM EVENT WHERE Event_Id = '$Event_Id' ORDER BY Date_create DESC"; 
            $resulti = $conn->query($sqli);
            $rowi = mysqli_fetch_assoc($resulti);
             ?>
             
        <div class ="box text-center">
        <span class = "font1"> <?php echo $row['Date_create']; ?></span>
            <div class="row">
                    <div class="column">
                        <br>
                        <span class = "detail"> Event Name: </span><span class = "text"><?php echo $rowi['Event_name']; ?> </span><br>
                        <span class = "detail"> Event Venue: </span><span class = "text"><?php echo $rowi['Event_venue']; ?> </span><br>
                        <span class = "detail"> Event Time: </span><span class = "text"><?php echo $rowi['Event_time']; ?> </span><br>
                        <span class = "detail"> Event Date: </span><span class = "text"><?php echo $rowi['Event_date']; ?> </span><br>
                        <span class = "detail"> Event Description: </span><span class = "text"><?php echo $rowi['Event_description']; ?> </span><br>
                        <span class = "detail"> Event link: </span> <span class = "text"><a href="<?php echo $rowi['Event_link'];?>"><?php echo $rowi['Event_link'];?></a></span> <?php
                        $Event_Id = $rowi['Event_Id'];

                        $upload =   $rowi['Event_photo'];
                        ?>
                    </div>
                <div class="column">
                    <td><img class = "resize" src="../staff/uploads/<?php echo $upload ?>"> 
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
            <a href="delete.php?del=<?php echo $Event_Id ?>" type="button" class = "btn btn-lg btn-danger">Not Attend</a>  
                            
        </div>
            <?php
        }
    }
?>      
