<?php session_start();?>

<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    body,html {
        height:100%;
        margin:0;

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
    .title{color: #0076DA;}

    .heading{color: #FBF6F5;
        position: absolute;
        top: 8%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;

    }
    .home{color :  #0080ff;}
    .conform{color : #D34332;}
    .info{color: #000842;}
    .file{color : #7E0101;}
    .button{color: #ffffff;
        border-radius:25%;
        background-color: #EFEFEF;}
        .box {border-style:solid;
            position: absolute;
            background-color:rgb(184, 177, 164,0.6);
            border-color:  #F9D42F;
            width:50%;
            border-radius:5%;
            margin:auto;
            margin-top:50px;
            padding-bottom: 30px;
            padding-top: 10px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            text-align: center;}
        </style>
</head>
    <body>
        <div class="bg-image"></div>
        <div class="fluid-container text-center">
            <div class="heading">
                <br><h1> <span > Welcome to AU Events </span> <a href="staff_login.php"><br>
                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/1/11/ABAC_Logo.png/220px-ABAC_Logo.png" alt="HOME" style="width:72px;height:72px;"></a>
                </div>
                <div class ="box">
                    <h1><span class = "title">  Register account</span></h1>
                    <h2><span class = "title">  Staff</span></h2>
                    <br>
                    <form action = "Staff_login.php" method = "GET">
                        <h6><span class = "conform">Already have an account?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button value="Upload" type = "submit" class="btn btn-outline-light btn-sm"> Log In </button></span></h6><br>
                    </form>
                    <form enctype="multipart/form-data" action="Staff_signupprocess.php" method="POST">
                        <span class = "info"> AU ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type = "text" name = "userId"> </span><br><br>
                        <span class = "info"> Full Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; <input type = "text" name = "fullName"> </span><br><br>
                        <span class = "info"> email Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; <input type = "text" name = "email_Id"> </span><br><br>
                        <span class = "info"> phone Number:&nbsp; <input type = "text" name = "Phone_Number"> </span><br><br>
                        <span class = "info"> Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; <input type = "text" name = "password"> </span><br><br>


                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button value="Upload" type = "submit" class="btn btn-success"> Signup </button><br>
                    </form>

                </div>
            </div>
        </div>
    </body>

    </html>
