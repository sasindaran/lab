<?php
$conn = new mysqli("localhost", "root", "", "lab");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["name"];
$email = $_POST["email"];
$regno = $_POST["regno"];
$fname = $_POST["fname"];
$date = $_POST["date"];
$degree = $_POST["degree"];
$tel = $_POST["tel"];
$photo = $_POST["photo"];

$sql = "INSERT INTO regform VALUES ('$name','$regno','$fname','$date','$email','$degree','$tel','$photo')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
