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

$sql = "SELECT * FROM details WHERE name='Tushar'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " - Name: ". $row["name"]. "<br>" . " - Surname: " . $row["surname"].  "<br>" . 
         " - DateOfBirth:  " . $row["dateoffbirth"]. "<br>" . " - Email: " . $row["email"].  "<br>" .
         " - Password: " . $row["password"].  "<br>" . " - MobileNumber: " . $row["mobilenumber"].  "<br>" .
         " - DegreeProgram: " . $row["degreeprogram"].  "<br>" . " - Address: " . $row["address"].  "<br>" .
         " - Gender: " . $row["gender"].  "<br>" ;
  }
} else {
  echo "0 results";
}
$conn->close();
?>