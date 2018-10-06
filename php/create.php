<?php session_start(); ?>
<?php include 'index.html';?>
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
                .description{font-size: 18pt; height: 40px; width:280px;}
                
                .box {border-style:solid;
                        background-color:#e6eeff;
                        border-color:  #ccccff;
                        width:100%;
                        border-radius:5%;
                        margin:auto;
                        margin-top:50px;
                        padding-bottom: 30px;
                        padding-top: 30px;}
            </style>
            <!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="..\css\staff_index.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div>
        <div class="header container-fluid" align="center">
            <div class="row">
                <div class="col-xs-6 text-left">
                    <h1><img src="https://registrar.au.edu/wp-content/uploads/2017/01/ABAC_logo_footer_white.png" alt="HOME" style="width:82px;height:82px;border:0;"><span class = "title">&nbsp;AU EVENTS </span>
                </h1>
                </div>
                <div class="col-xs-6">
                    <ul class="nav nav-pills ">
                        <li class="pull-right">
                            <a class="top-button" href="#">LOG OUT</a>
                        </li>
                        <li class="pull-right">
                            <a class="top-button" href="#">CONTACT</a>
                        </li>
                        <li class="pull-right">
                            <a class="top-button" href="#">ABOUT</a>
                        </li>
                        <li class="pull-right">
                            <a class="top-button" href="#">CREATE</a>
                        </li>
                        <li class="pull-right top-button">
                            <a class="top-button" href="#">HOME</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="col-xs-4 text-center">
                    <div align="center" class="menu">
                        <div "fluUserID-container text-center">
                            <h2><span class = ".font-weight-bold">&nbsp;&nbsp; Catagory &nbsp; &nbsp;</span></h2>
                            <br>
                            <div class="btn-group-vertical btn-group-lg" role="group">
                                <button type="button" class="btn btn-primary">Mandatory</button> &nbsp;
                                <button type="button" class="btn btn-success">Entertainment</button>&nbsp;
                                <button type="button" class="btn btn-danger">Volunteer</button>&nbsp;
                                <button type="button" class="btn btn-warning">others &nbsp;</button>&nbsp;
                                <div class="dropdown btn-group-lg" role="group">
                                    <button class="btn btn-info dropdown-toggle " type="button" data-toggle="dropdown">&nbsp;&nbsp;&nbsp;&nbsp;Faculty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-header">A</li>
                                        <li><a href="#">Architecture</a></li>
                                        <li><a href="#">Arts</a></li>
                                        <li class="dropdown-header">B</li>
                                        <li><a href="#">BBA</a></li>
                                        <li><a href="#">Bio Technology</a></li>
                                        <li class="dropdown-header">C</li>
                                        <li><a href="#">Communication Arts</a></li>
                                        <li class="dropdown-header">E</li>
                                        <li><a href="#">Engineering</a></li>
                                        <li><a href="#">English Studies</a></li>
                                        <li class="dropdown-header">L</li>
                                        <li><a href="#">Laws</a></li>
                                        <li class="dropdown-header">M</li>
                                        <li><a href="#">Music</a></li>
                                        <li class="dropdown-header">M</li>
                                        <li><a href="#">Nursing</a></li>
                                        <li class="dropdown-header">S</li>
                                        <li><a href="#">science and technology</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Dropdown header 2</li>
                                        <li><a href="#">About Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-8"><br>
                    <div class="button btn-group-lg" align="center">
                        <button name="submit" value="submit" type="submit" class="btn btn-primary"> recent Events</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button name="submit" value="submit" type="submit" class="btn btn-danger"> Past Events</button>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
       
            <div class="fluid-container text-center">
                <br><h1> <span class = "heading"> CREATE NEW EVENT</span> </h1>
                <div class ="box">

            
                    <form enctype="multipart/form-data" action="index.php" method="GET">
        
                    <br><span class = "info"> Event name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type = "text" name = "eventName"> </span><br><br>
                    <span class = "info"> Event Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type = "date" name = "eventDate"> </span><br><br>
                    <span class = "info"> Event Time: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type = "text" name = "eventTime"> </span><br><br>
                    <span class = "info"> Event Venue: &nbsp;&nbsp;&nbsp;&nbsp;: <input type = "text" name = "eventVenue"> </span><br><br>
                    <span class = "info"> Event Description : <input type = "text" name = "description" style="font-size: 18pt; height: 150px; width:200px;"> </span><br><br>
                    <span class = "info"> Link     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  <input type="url" name="link"> </span><br><br>
                
                    <h10><span class = "file">&nbsp;&nbsp;Upload your file:&nbsp;&nbsp;</span></h10>
                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="uploaded_file"></input><br/><br><br>
    
  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button value="Upload" type = "submit" class="btn btn-success"> + Create New </button><br>
                    </form>
                    <br><div><h3><a href = "index.php"  class="btn btn-outline-danger btn-sm">Cancel</a></div></h3><br />
                </div>
           </div>
            
        </head>
    </html>
