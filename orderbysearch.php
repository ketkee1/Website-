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
$email=$_POST['email'];
}

$sql = "SELECT * FROM details details ORDER BY name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo   " - Email: ". $row["email"] .'<br>';
  }
} else {
  echo "0 results";
}
$conn->close();
?>