<?php
$severname="localhost";
$username="root";
$password="root";
$dbname="cmpinf1205";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

//prepare and bind
$stmt=$conn->prepare("INSERT INTO cmpinf1205 (username, age, gender, ethnicity) VALUES (?, ?, ?, ?)");
$stmt->bind_param()

?>