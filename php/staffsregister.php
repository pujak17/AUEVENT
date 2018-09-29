<?php session_start(); ?>

<!DOCTYPE>
    <html>
        <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <style>
                 body {
                    background-image: url('https://media.istockphoto.com/photos/exterior-view-of-a-catholic-church-at-assumption-university-thailand-picture-id519273394?k=6&m=519273394&s=612x612&w=0&h=RCWjpemzTUotFxP-P3KE_CkSMkaTKRhRDg2pLn29Kb4=');
                    background-repeat: no-repeat;
                    background-size: 1260px 950px;
                }
                .title{color: #0076DA;}
                hr {height: 2;
                    max-height: 0;
                    font-size: 1px;
                    line-height: 0;
                    border-top: 1px solid #aaaaaa;
                    border-bottom: 1px solid #ffffff;    
                    clear: both;}
                .heading{color: #FBF6F5;}
                .home{color :  #0080ff;}
                .conform{color : #D34332;}
                .info{color: #000842;}
                .file{color : #7E0101;}
                .button{color: #ffffff;
                    border-radius:25%;
                    background-color: #EFEFEF;}
                .box {border-style:solid;
                        background-color:rgb(184, 177, 164,0.6);
                        border-color:  #F9D42F;
                        width:50%;
                        border-radius:5%;
                        margin:auto;
                        margin-top:50px;
                        padding-bottom: 30px;
                        padding-top: 30px;}
            </style>
            <div class="fluid-container text-center">
            <br><h1> <span class = "heading"> Welcome to AU Events &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <a href="login1.php">
            
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/1/11/ABAC_Logo.png/220px-ABAC_Logo.png" alt="HOME" style="width:72px;height:72px;border:0;"></a><br></h1><br>
            <hr>
            <div class ="box">
            <h1><span class = "title">  Register account</span></h1>
            <h2><span class = "title">  Staff</span></h2>
            <br>
            <form action = "login1.php" method = "GET">
            <h6><span class = "conform">Already have an account?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button value="Upload" type = "submit" class="btn btn-outline-light btn-sm"> Log In </button></span></h6><br>
            </form>
            <form enctype="multipart/form-data" action="SignupProcess.php" method="POST">
        
            <span class = "info"> AU ID : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type = "text" name = "userId"> </span><br><br>
            <span class = "info"> Full Name : <input type = "text" name = "fullName"> </span><br><br>
            <span class = "info"> Phone number : <input type = "text" name = "Phone number"> </span><br><br>
            <span class = "info"> email Id : <input type = "text" name = "email Id "> </span><br><br>
            <span class = "info"> Password &nbsp;&nbsp;&nbsp;&nbsp;: <input type = "text" name = "password"> </span><br><br>
            <h10><span class = "file">&nbsp;&nbsp;Upload your file:&nbsp;&nbsp;</span></h10>
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="uploaded_file"></input><br/><br><br>
            <hr>
  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button value="Upload" type = "submit" class="btn btn-success"> Signup </button><br>
            </form>
            
            </div>
            </div>
        </head>
    </html>
