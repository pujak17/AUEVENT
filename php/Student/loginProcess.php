<?php session_start();?>
<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <style>
        body,html {
        height:100%;
        margin: 0;
    }
    .bg-image{
        background-image: url("https://media.istockphoto.com/photos/exterior-view-of-a-catholic-church-at-assumption-university-thailand-picture-id519273394?k=6&m=519273394&s=612x612&w=0&h=RCWjpemzTUotFxP-P3KE_CkSMkaTKRhRDg2pLn29Kb4=");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        filter: blur(3px);
        -webkit-filter: blur(3px);
        height: 100%;
    }
    .Title {color:#1a237e;}
    .Title2 {color: #1a237e;}
    .Title3 {
        color: #AD1457;
        font-size:30px;
    }
    .box {
        border-style:solid;
        background-color:rgb(229, 237, 238, 0.7);
        border-color: #F3C370;
        width:50%;
        border-radius:20px;
        margin:auto;
        margin-top:10px;
        padding-bottom: 30px;
        padding-top: 30px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        text-align: center;
    }
    </style>
</head>

<body>

    <?php
if (isset($_SESSION['valid'])) {
    include 'include.php';
    $ID = $_SESSION['valid'];
    $sql = "SELECT * FROM STUDENT WHERE Student_Id='$ID'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['Full_name'];
    ?>
    <div class="bg-image"></div>
    <div class="fluUserID-container text-center" ;>
        <div class="box">
            <h1><span class="Title"> Welcome to the page!! </span></h1><br>
            <h4><span class="Title3">
                    <?php echo ($name); ?> </span></h4><br><br>
            <h2><span class="Title2 "> You have sucessfully logged In! </span></h2><br>
            <br><br><br>
            <?php if (isset($_SESSION['valid'])) {?>
            <h5><a href='home.php'>
                    <span class="Title3">Access the information</span>
                </a><br><br></h5>
            <?php } else {?>
            <h1><span class="Title"> invalid session </span></h1><br>
            <?php }?>
            <form action="login.php" method="GET">
                <button class="submit" type="submit" style="background: #EF5350; border-radius:5px; color: #FAFAFA; ">Log
                    Out </button>
            </form>
            <br>
        </div>
    </div>
    <?php
} else {
    echo "You must be <a href = 'login.php'> logged in </a> the access the information!";
}

?>
    <?php ?>
</body>


</html>