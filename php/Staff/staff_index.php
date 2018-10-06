<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="..\..\css\staff_index.css" type="text/css" rel="stylesheet">
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
                            <a class="top-button" href="loginstaff.php">LOG OUT</a>
                        </li>
                        <li class="pull-right">
                            <a class="top-button" href="staff_myevents.php">MY EVENTS</a>
                        </li>
                        <li class="pull-right">
                            <a class="top-button" href="create.php">CREATE</a>
                        </li>
                        <li class="pull-right top-button">
                            <a class="top-button" href="staff_home.php">HOME</a>
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
                            <h2><span class = ".font-weight-bold">&nbsp;&nbsp; <br><br>Catagory &nbsp; &nbsp;</span></h2>
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
                        <button name="submit" value="submit" type="submit" class="btn btn-primary btn-lg active"> recent Events</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button name="submit" value="submit" type="submit" class="btn btn-default btn-lg active"> Past Events</button>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    
    
  
   </div>
</body>