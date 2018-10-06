<?php session_start(); ?>
<?php include('staff_index.php') ?>
<!DOCTYPE>
    <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="..\css\staff_index.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
       
            <div class="fluid-container text-center">
                <br><h1> <span class = "heading"> CREATE NEW EVENT</span> </h1>
                <div class ="box">

            
                    <form enctype="multipart/form-data" action="staff_myevents.php" method="POST">
                    <div class="fluid-container text-center">
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = "info"> Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type = "text" name = "eventName"> </span><br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = "info">  Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type = "date" name = "eventDate"> </span><br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = "info">  Time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type = "text" name = "eventTime"> </span><br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = "info">  Venue &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type = "text" name = "eventVenue"> </span><br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = "info"> Description: <input type = "text" name = "description" style="font-size: 10pt; height: 100px; width:230px;"> </span><br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = "info"> Link  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  <input type="url" name="link"> </span><br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = "info"> Select image to upload:</span><br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp; <input type="file" name="fileToUpload" id="fileToUpload"><br/><br><br>
        
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button value = "Upload file " type = "submit" class="btn btn-lg btn-success"> + Create New </button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "index.php"  class="btn btn-lg btn-danger" disabled="disabled">Cancel</a>
                    
                    </form>
                    <div><h3></div></h3><br />
                </div>
           </div>
            
        </head>
    </html>
