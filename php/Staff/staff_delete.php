
<?php 

include('include.php');

$ID = $_GET["del"];

if(isset($_GET['del'])) {
    $ID = $_GET['del'];
    $sql = "DELETE FROM EVENT WHERE Event_Id = '$ID'";

    if (mysqli_query($conn, $sql)) {
    
        header ('location: staff_myevent.php');
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

}
?>







