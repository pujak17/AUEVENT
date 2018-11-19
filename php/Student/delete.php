<?php session_start();?>
<?php 
if(isset($_SESSION['valid'])) {
include('include.php');
$Student_Id = $_SESSION['valid'];
echo $Student_Id;
if(isset($_GET['del'])) {
    $ID = $_GET['del'];
    echo $ID;
    $sql = "DELETE FROM ATTENDS WHERE Student_Id = '$Student_Id' AND Event_Id = '$ID'";

    if (mysqli_query($conn, $sql)) {
    
        header ('location: myevents.php');
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
}
?>
