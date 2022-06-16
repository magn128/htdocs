<?php 
$brukerid = $_GET['id']; // Henter Brukerid


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "13.06utviklingsoppgave";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM ansatte WHERE id='$brukerid'"; // Sletter brukerdataen

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>