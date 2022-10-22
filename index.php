<h1>Hamza</h1>
<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "wp_db";

$conn = mysqli_connect($server, $user, $pass, $db);

if(!$conn){
    die("Connection Failed " . mysqli_connect_error());
}
else{
    echo "connect Sucessfully";
}


$sql = "SELECT umeta_id FROM wp_usermeta";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br>Name: " . $row["umeta_id"];
  }
} else {
  echo "0 results";
}
$conn->close();


?>