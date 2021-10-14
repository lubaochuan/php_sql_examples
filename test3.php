<?php

$db = new PDO("mysql:dbname=imdb", "webuser", "password");
$rows = $db->query("SELECT * FROM actors WHERE last_name LIKE 'Del%'");
foreach ($rows as $row) {
  ?>
  <li> First name: <?= $row["first_name"] ?>,
       Last name:  <?= $row["last_name"]  ?> </li>
  <?php
}

?>
