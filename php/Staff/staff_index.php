<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="..\..\css\staff_index.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
.menu {
    border-style: solid;
    position: absolute;
    background-color: #E8DCDC;
    border-color: #E8DCDC;
    width: 230px;
    border-radius: 1%;
    padding-bottom: 110px;

}
.sidenav {
    height: 100%;
    width: 265px;
    position: fixed;
    z-index: 1;
    top: 112px;
    left: 10;
    background-color: #844345;
    overflow-x: hidden;
    padding-top: 10px;
}
</style>
<body>
    <div>
        <div class="header container-fluid" align="center">
            <div class="header">
                <div class="col-xs-6 text-left">
                    <h1><img src="https://registrar.au.edu/wp-content/uploads/2017/01/ABAC_logo_footer_white.png" alt="HOME" style="width:82px;height:82px;border:0;"><span class = "title">&nbsp;AU EVENTS </span>
                </h1>
                </div>
                <div class="col-xs-6">
                    <ul class="nav nav-pills ">
                        <li class="pull-right">
                            <a class="top-button" href="staff_login.php">LOG OUT</a>
                        </li>
                        <li class="pull-right">
                            <a class="top-button" href="staff_myevents.php">MY EVENTS</a>
                        </li>
                        <li class="pull-right">
                            <a class="top-button" href="staff_create.php">CREATE</a>
                        </li>
                        <li class="pull-right top-button">
                            <a class="top-button" href="staff_home.php">HOME</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <div class="sidenav">
                <div class="col-xs-4 text-center">
                    <div align="center" class="menu">
                        <div "fluUserID-container text-center">
                            <h2><span class = ".font-weight-bold">&nbsp;&nbsp; <br><br>Catagory &nbsp; &nbsp;</span></h2>
                            <br>
                            <div class="btn-group-vertical btn-group-lg" role="group">
                                <a href = "staff_mandatory.php" class="btn btn-primary">Mandatory</a> &nbsp;
                                <a href = "staff_entertainment.php"  class="btn btn-success">Entertainment</a>&nbsp;
                                <a href = "staff_mandatory.php"  class="btn btn-danger">Volunteer</a>&nbsp;
                                <a href = "staff_mandatory.php"  class="btn btn-warning">others &nbsp;</a>&nbsp;
                                <a href = "staff_faculty.php"  class="btn btn-info">Faculty &nbsp;</a>&nbsp;
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    
    
  
   </div>
</body>