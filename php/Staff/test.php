<?php include('include.php');

            
                
                
                $sql = "SELECT * FROM ADMIN_PROFILE";
                $result = $conn->query($sql);
                $row = mysqli_fetch_assoc($result);
                print_r($row);
            ?>
                