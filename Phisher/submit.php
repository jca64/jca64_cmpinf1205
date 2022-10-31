<?php

$username=$_POST['username'];
$age=$_POST['gender-select'];
$gender=$_POST['gender-select'];
$ethnicity=$_POST['ethnicity-select'];

// Create connection
$conn = new mysqli("localhost", "root", "CMPINF1205", "cmpinf1205");

//Check connection
if($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

//SQL to create table
$sql="CREATE TABLE IF NOT EXISTS participants (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(20) NOT NULL,
    age INT,
    gender INT,
    ethnicity INT
)";

if ($conn->query($sql) !== TRUE) {
    die( "Error creating table: " . $conn->error);
}

$sql = "INSERT INTO participants (email, age, gender, ethnicity) VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("siii", $username, $age, $gender, $ethnicity);
$stmt->execute();
$stmt->close();
$conn->close();


?>

<!DOCTYPE html>
<p>
    Thanks for participating!
</p>
</html>