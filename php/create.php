<?php session_start(); ?>

<!DOCTYPE>
    <html>
        <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <style>
    
                body {background-color: #ECEDF7}
                .title{color: #492FAB;s}
                .heading{color: #76448A;}
                .home{color :  #0080ff;}
                .conform{color : #EC7063;}
                .info{color: #5499C7;}
                .file{color : #EC7063;}
                .button{color: #ffffff;
                    border-radius:25%;
                    background-color: #00b386;}
                .box {border-style:solid;
                        background-color:#e6eeff;
                        border-color:  #ccccff;
                        width:50%;
                        border-radius:5%;
                        margin:auto;
                        margin-top:50px;
                        padding-bottom: 30px;
                        padding-top: 30px;}
            </style>
            <div class="fluid-container text-center">
            <br><h1> <span class = "heading"> CREATE NEW EVENT
            </span> </h1>
            <div class ="box">

            
            <form enctype="multipart/form-data" action="createProcess.php" method="POST">
        
            <br><span class = "info"> Event Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type = "text" name = "userId"> </span><br><br>
            <span class = "info"> Event type <input type = "text" name = "userName"> </span><br><br>
            <span class = "info"> Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type = "text" name = "email"> </span><br><br>
            <span class = "info"> Password &nbsp;&nbsp;&nbsp;&nbsp;: <input type = "text" name = "password"> </span><br><br><br>
            
            <h10><span class = "file">&nbsp;&nbsp;Upload your file:&nbsp;&nbsp;</span></h10>
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="uploaded_file"></input><br/><br><br>
    
  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button value="Upload" type = "submit" class="btn btn-success"> + Create New </button><br>
            </form>
            <br><div><h3><a href = "index.php"  class="btn btn-outline-danger btn-sm">Cancel</a></div></h3><br />
            </div>
            </div>
        </head>
    </html>
