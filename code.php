 <?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "api";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT personid, first_name, last_name, email, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["personid"]. " - Name: " . $row["first_name"]. " -Last Name: " . $row["last_name"]."-Email: ". $row["email"]."-Password:". $row["password"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 
