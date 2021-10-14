<?php

$servername = "localhost";
$dbname = "imdb";
$username = "webuser";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "SELECT * FROM actors WHERE last_name LIKE 'Del%'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
?>
    <li>
    First name: <?=$row["first_name"]?>, Last name:  <?=$row["last_name"]?>
    </li>
<?php
  }
} else {
  echo "0 results";
}

?>
