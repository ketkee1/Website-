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
}

$sql = "SELECT * FROM details WHERE  name='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " - Name: ". $row["name"] ; " - SurName: ". $row["surname"] ; " - Dateofbirth: ". $row["dateofbirth"] ;
  }
} else {
  echo "0 results";
}
$conn->close();
?>