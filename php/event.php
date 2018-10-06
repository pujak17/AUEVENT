<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="..\css\staff_index.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class ="box">
<span class = "details"> Event name: </span><span class = "text"><?php echo $_GET["eventName"]; ?></span><br>
<span class = "details">Event Date : </span><span class = "text"><?php echo $_GET["eventDate"]; ?></span><br>
<span class = "details">Event Venue : </span><span class = "text"><?php echo $_GET["eventVenue"]; ?></span><br>
<span class = "details">Description: </span><span class = "text"><?php echo $_GET["description"]; ?></span><br>
<span class = "details">link: </span><span class = "text"><?php echo $_GET["link"]; ?></span><br><br>
<div class="button btn-group-lg" align="center">
<button name="submit" value="submit" type="submit" class="btn btn-success"> Attending</button> &nbsp;&nbsp;&nbsp;
<button name="submit" value="submit" type="submit" class="btn btn-danger"> Not Attending</button>
</div>
</div>
</body>
</html>