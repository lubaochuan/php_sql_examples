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

$first = "Tom";
$last = "Cruise";

$sql =
"SELECT name, year FROM actors, movies, roles".
" WHERE actors.id = roles.actor_id".
" AND roles.movie_id = movies.id".
" AND first_name = '".$first."'".
" AND last_name = '".$last."'";

echo $sql;

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
  print_r($row);
  print("</br>");
}
?>
