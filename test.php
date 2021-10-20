<?php

$db = new PDO("mysql:dbname=imdb", "webuser", "password");
$rows = $db->query("SELECT * FROM actors WHERE last_name LIKE 'Del%'");
#print_r($rows);
foreach ($rows as $row) {
  ?>
<?php
print_r($row);
?>
  <li> First name: <?= $row["first_name"] ?>,
       Last name:  <?= $row["last_name"]  ?> </li>
  <?php
}

?>
