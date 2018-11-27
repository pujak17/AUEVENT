<!DOCTYPE html>
<?php include('staff_index.php') ?>
<!DOCTYPE HTML>
<?php session_start();?>
<?php
include('include.php');
if(isset($_SESSION['valid'])) {
    include('include.php');
        $ID = $_SESSION['valid'];
        if (isset($_GET['det'])) {
          $ID = $_GET['det'];
          
        } 

?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="..\..\css\staff_index.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
.main {
     margin-left: 100px; /* Same as the width of the sidenav */
     font-size: 20px; /* Increased text to enable scrolling */
     padding: 0px 50px;
     
 }
  .box{
    font-size: 150%;
    border-style: solid;
    background-color:rgb(247, 244, 244, 0.7);
    border-color:  rgb(232, 220, 220, 0.6);
    width:70%;
    border-radius: 20px;
    margin-top: 30px;
    padding-bottom: 50px;
    padding-top: 50px;
    margin-left:250px;
}
.column {
    float: left;
    width: 50%;
    padding: 15px;
}
</style>
<div class="main">
<div class="buttons"><br><br><br>
                <div class="button" align="center">
                        <a href = "staff_myevent.php" class="btn btn-danger active">Go Back</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="staff_home.php" class="btn btn-primary btn-lg active"> Recent Events </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="staff_pastevent.php" class="btn btn-default btn-lg active"> Past Events</a>
                        <br>
                        <br>
   
                </div>           
</div>
<?php $sqli1 = "SELECT * FROM EVENT WHERE Event_Id = '$ID'";
          $resulti1 = $conn->query($sqli1);
          $rowi1 = mysqli_fetch_assoc($resulti1); 
           
          $Event_name = $rowi1['Event_name'];
          //echo $Event_name;
?>

<h2><span class = "heading">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; 
            &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; Details of students Attenting</span> &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
    <div class ="box">
        <span class = "details">  &nbsp; &nbsp; &nbsp;Event name: </span><span class = "font"><?php echo $Event_name; ?></span><br>
            <br>
    <div class="table-responsive-sm">   
    <table class = "table table-striped">
      <tr>
        <th><span class = "detail">#</span></th>
        <th><span class = "detail">ID</span></th>
        <th><span class = "detail">Name</span></th>
        <th><span class = "detail">Faculty</span></th>
        <th><span class = "detail">Major </span></th>
      </tr>
<?php
      $sql = "SELECT * FROM ATTENDS WHERE Event_Id = '$ID'";
      $result = $conn -> query($sql);
      $Event_Id = $row['Event_Id'];
      $count = 0;
      while ($row = mysqli_fetch_array($result)){
        $Event_Id = $row['Event_Id'];
        
        $count = $count + 1;
        $Student_Id = $row['Student_Id'];
            $sqli = "SELECT * FROM STUDENT WHERE Student_Id = '$Student_Id'";
            $resulti = $conn->query($sqli);
            $rowi = mysqli_fetch_assoc($resulti); 

            
            //$rowi['Full_name'];
            
?>
      <tr>
        <td><span class = "text"><?php echo $count ?></span></td>
        <td><span class = "text"><?php echo $rowi['Student_Id']; ?></span></td>
        <td><span class = "text"><?php echo $rowi['Full_name']; ?></span></td>
        <td><span class = "text"><?php echo $rowi['Faculty']; ?></span></td>
        <td><span class = "text"><?php echo $rowi['Major']; ?><span></td>
      </tr>
   
<?php } ?>
    </table>
  </div>
</div>

</body>
</html>

</div>
</div>
</div>
</body>
</div>
    <?php 
      }?>