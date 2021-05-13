<?php

// Adding in the configuration file
include ('../config.php');

$date = $_POST['date'];
$time = $_POST['time'];
$duration = $_POST['duration'];
$xcoord = $_POST['x']
$ycoord = $_POST['y']

$query = ("SELECT visit_date FROM visits WHERE visit_date='$date' and visit_time='$time' and duration='$duration' and x_coordinate='$xcoord' and y_coordinate='$ycoord'");
$query2 = ("INSERT INTO visits (visit_date, visit_time, duration, x_coordinate, y_coordinate) VALUES ('$date', '$time', '$duration', '$xcoord', '$ycoord')");

$insert = mysqli_query($conn, $query2); 
    
if($res = $conn->query($query)){ 
    if($row = $res->fetch_assoc()) {
        session_start();
        $_SESSION["user"] = $row;
	header("location: add_visit.php"); 
}
}

?>

