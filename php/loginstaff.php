<?php session_Start(); ?>
<?php include('databaseConfig.php'); ?>
<!DOCTYPE HTML>
    <html>
        <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><html>
       
        <body>
        
        <style>
        body {
            background-image: url("http://photo.sunrisevietnam.com//2016/11/25/tl-1.jpg");
            background-repeat: no-repeat;
            background-size: 1270px 760px;
    
            } 
            
            .heading{color: #E5EDEE;}
            .title {color: #E76D3C;}
            .info {color: #1B3963;}
            .home {color: #DD2358;}
            .fail {color: #D22743;}
            .box {border-style:solid;
            background-color:rgb(229, 237, 238, 0.5);
            border-color: #F3C370;
            width:50%;
            border-radius:5%;
            margin:auto;
            margin-top:50px;
            padding-bottom: 30px;
            padding-top: 30px;}
            .account{color: #286610;}
        </style>
     </head>

    
    <div class = "fluUserID-container text-center";>
    <h2><span class= "heading"> AU EVENTS </span></h2>
    <h3><span class= "heading"> Login  </span></h3>
    <div class = "box">
    

    <?php 

    if(isset($_GET['submit'])) {
        $ID = ($_GET['ID']);
        $userName = ($_GET['userName']);
        $userPassword = ($_GET['userPassword']);

        
        if($ID == " " || $userPassword == " ") {
        ?>
            <h5><span class = "fail"> Either the username or password that you typed in is empty </span></h5><br/>
            <form action ="signup.php" method = "GET">
                <button value="Upload" type = "submit" class="btn btn-info"> Go back? </button>
            </form>
    <?php
        } else {
             $sql = "SELECT * FROM profilePage WHERE ID = '$ID' AND userPassword = '$userPassword'";
                $result = $conn->query($sql);
                $row = mysqli_fetch_assoc($result);
                //print_r($row);
                if(is_array($row) && !empty($row)) {
                    $validUser = $row['ID'];
                    $_SESSION['valid'] = $validUser;
                    //$_SESSION['userName'] = $row['userName'];
                    $_SESSION['userPassword'] = $row['userPassword'];
                ?>
                <span class = "success"> You have logged in succesfully!! <?php echo ($row['userName']) ?></span><br>
                <?php

            } else {
                
                ?>
                <h3><span class = "fail"> ERROR!</span><br></h3>
                <span class = "info"> The user name or the password that you typed in is incorrect! Please try again!!</span><br><br>
                <form action ="login1.php" method = "GET">
                    <button value="Upload" type = "submit" class="btn btn-info"> Go back? </button>
                  </form>
                <?php


            } if(isset($_SESSION['valid'])) {
                header('Location: loginProcess.php');
            
            }

            
        }

    } else {
        ?>
        <a href="login1.php">
        <img src="https://registrar.au.edu/wp-content/uploads/2017/01/ABAC_logo_footer_white.png" alt="HOME" style="width:62px;height:62px;border:0;"></a><br>
        
        <br><h2><span class = "title"> LOG IN </span></h2><br>
        <img src ="https://www.freeiconspng.com/uploads/account-profile-icon-1.png" height="70" width="70" alt = "account"><br><br>

        <form action = "staff_index.php" method = "GET" name = "login">
        <span class = "info">AU ID &nbsp;&nbsp;&nbsp; : <input type = "text" name = "ID"></span><br><br>
        <span class = "info">Password : <input type = "text" name = "userPassword"></span><br><br>
        <p><span class = "account">&nbsp;&nbsp;&nbsp; Already have an account? </span></p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name = "submit" value ="submit" type = "submit" class="btn btn-primary"> Log In </button><br><br><br>
        </form>
        <div class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="staffsregister.php" class="btn btn-outline-danger btn-sm"> + New Account</a></div>
        <p><span class = "fail">&nbsp;&nbsp;&nbsp; New to the place? </span></p>
        
        <?php 
    }
    ?>
    </div>
    </div>
    </body>
    </html>

    


