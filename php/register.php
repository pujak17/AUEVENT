<?php session_start(); ?>

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
                    background-image: url("https://pre00.deviantart.net/76c3/th/pre/i/2016/036/0/3/abac_university_by_tairenar-d9qkzy6.jpg");
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-position: center;
                    filter: blur(8px);
                    -webkit-filter: blur(8px);
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
        </head>
         <body>
            <div class="bg-image"></div>
            <div class="fluid-container text-center">
            <br><h1> <span class = "heading"> Welcome to AU Events &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <a href="login1.php">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/1/11/ABAC_Logo.png/220px-ABAC_Logo.png" alt="HOME" style="width:72px;height:72px;border:0;"></a><br></h1><br>
            <hr>
            <div class ="box">
            <h1><span class = "title">  Register account</span></h1>
            <h2><span class = "title">  Students</span></h2>
            <br>
            <form action = "login.php" method = "GET">
            <h6><span class = "conform">Already have an account?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button value="Upload" type = "submit" class="btn btn-outline-light btn-sm"> Log In </button></span></h6><br>
            </form>
            <form enctype="multipart/form-data" action="SignupProcess.php" method="POST">
        
            <span class = "info"> AU ID : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type = "text" name = "userId"> </span><br><br>
            <span class = "info"> Full Name : <input type = "text" name = "fullName"> </span><br><br>
            <span class = "info"> Password &nbsp;&nbsp;&nbsp;&nbsp;: <input type = "text" name = "password"> </span><br><br>
            <span class = "option">Faculty:&nbsp;&nbsp;&nbsp;&nbsp;  <select><option value="Architectute">Architecture</option> 
            <option value="Arts">Arts</option> 
            <option value="BBA">BBA</option> 
            <option value="Biotechnology">Biotechnology</option> 
            <option value="Communication Arts">Communication Arts</option> 
            <option value="Engineering">Engineering</option> 
            <option value="English Studies">English Studies</option> 
            <option value="Law">Law</option> 
            <option value="Music">Music</option> 
            <option value="Nursing">Nursing</option> 
            <option value="science and technology">science and technology</option> 
            </select></span><br> <br>
            <span class = "info"> Major&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type = "text" name = "major"> </span><br><br>
            
  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button value="Upload" type = "submit" class="btn btn-success"> Signup </button><br>
            </form>
            
            </div>
            <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>
            </div>
</body>

    </html>
