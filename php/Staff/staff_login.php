<?php session_Start();
?>
<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <style>
        body,html {
                height: 100%;
                margin: 0;

            }
            .bg-image{
                background-image: url("http://photo.sunrisevietnam.com//2016/11/25/tl-1.jpg");
                filter: blur(3px);
                -webkit-filter: blur(3px);
                height: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .heading{color: #E5EDEE;}
            .title {color: #E76D3C;}
            .info {color: #1B3963;}
            .home {color: #DD2358;}
            .fail {color: #D22743;}
            .box {
                border-style:solid;
                background-color:rgb(229, 237, 238, 0.5);
                border-color: #F3C370;
                width:50%;
                border-radius:20px;
                margin:auto;
                margin-top:50px;
                padding-bottom: 30px;
                padding-top: 30px;
                position: absolute;
                top: 43%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 2;
                text-align: center;
        }
            .account{color: #286610;}
        </style>
</head>

<body>
    <div class="bg-image"></div>
    <div class="fluUserID-container text-center" ;>

        <div class="box">
            <h2><span class="heading"> AU EVENTS </span></h2>
            <h3><span class="heading"> Login </span></h3>

            <?php
include 'include.php';
if (isset($_GET['submit'])) {
    $Admin_Id = $_GET['Admin_Id'];
    $Admin_password = $_GET['Admin_password'];
    if ($Admin_Id == " " || $Admin_password == " ") {
        ?>
            <h5><span class="fail"> Either the username or password that you typed in is empty </span></h5><br />
            <form action="Staff_register.php" method="GET">
                <button value="Upload" type="submit" class="btn btn-info"> Go back? </button>
            </form>
            <?php
} else {
        $Admin_Id = $_GET['Admin_Id'];
        $Admin_password = $_GET['Admin_password'];
        $sql = "SELECT * FROM ADMIN_PROFILE WHERE Admin_Id = '$Admin_Id' AND Admin_password = '$Admin_password'";
        $result = $conn->query($sql) or die(mysql_error());
        $row = mysqli_fetch_assoc($result);
        if (is_array($row) && !empty($row)) {
            $validUser = $row['Admin_Id'];
            $_SESSION['valid'] = $validUser;
            $_SESSION['Admin_password'] = $row['Admin_password'];
            $_SESSION['Admin_name'] = $row['Admin_name'];
            ?>
            <span class="success"> You have logged in succesfully!!
                <?php echo ($row['userName']) ?></span><br>
            <?php
        } else {
            ?>
            <h3><span class="fail"> ERROR!</span><br></h3>

            <span class="info"> The user name or the password that you typed in is incorrect! Please try again!!</span><br><br>
            <form action="Staff_login.php" method="GET">
                <button value="Upload" type="submit" class="btn btn-info"> Go back? </button>
            </form>
            <?php
}
        if (is_array($row) && !empty($row)) {
            if (isset($_SESSION['valid'])) {
                header('Location: staff_loginsession.php');
            }
        }
    }

} else {
    ?>
            <a href="staff_login.php">
                <img src="https://registrar.au.edu/wp-content/uploads/2017/01/ABAC_logo_footer_white.png" alt="HOME"
                    style="width:62px;height:62px;border:0;"></a><br>
            <br>
            <h2><span class="title"> LOG IN </span></h2><br>
            <img src="https://www.freeiconspng.com/uploads/account-profile-icon-1.png" height="70" width="70" alt="account"><br><br>
            <form action="" method="GET" name="login">
                <span class="info">AU ID &nbsp;&nbsp;&nbsp; : <input type="text" name="Admin_Id"></span><br><br>
                <span class="info">Password : <input type="text" name="Admin_password"></span><br><br>
                <p><span class="account">&nbsp;&nbsp;&nbsp; Already have an account? </span></p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="submit" value="submit" type="submit" class="btn btn-primary">
                    Log In </button><br><br><br>
            </form>
            <div class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="staff_register.php" class="btn btn-outline-danger btn-sm">
                    + New Account</a></div>
            <p><span class="fail">&nbsp;&nbsp;&nbsp; New to the place? </span></p>

            <?php
}
?>
        </div>
    </div>
</body>

</html>