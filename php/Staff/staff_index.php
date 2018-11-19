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
body {
    font-family: "Trebuchet MS", Helvetica, sans-serif;
    background-color: rgb(244, 235, 235, 0.3);
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
                            <a class="top-button" href="staff_myevent.php">MY EVENTS</a>
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
        <?php
    if(isset($_SESSION['valid'])) {
    $name = $_SESSION['Admin_name']; 
    echp ($name);
    }
?>
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
                                <a href = "staff_volunteer.php"  class="btn btn-danger">Volunteer</a>&nbsp;
                                <a href = "staff_others.php"  class="btn btn-warning">others &nbsp;</a>&nbsp;
                                <a href = "staff_faculty2.php"  class="btn btn-info">Faculty &nbsp;</a>&nbsp;
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    
    
   </div>
</body>
