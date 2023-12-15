<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))

{
$name=$_POST['name'];
$surname=$_POST['surname'];
$dateofbirth=$_POST['dateofbirth'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobilenumber=$_POST['mobilenumber'];
$select1=$_POST['select1'];
$address=$_POST['address'];
$gender=$_POST['gender'];
}

$sql = "INSERT INTO details (name, surname, dateofbirth, email, password, mobilenumber, select1, address, gender)
VALUES ('$name', '$surname', '$dateofbirth', '$email', '$password', '$mobilenumber', '$select1', '$address', '$gender')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>