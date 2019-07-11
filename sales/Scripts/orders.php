<?php
require('../../Config.php');
$link = mysqli_connect($Host . ":" . $Port, $Username, $Password, $Database);

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
  header('Content-Type: application/json');
  $query = mysqli_query($link,"SELECT * FROM orders");
  $rows = array();
  while($r = mysqli_fetch_assoc($query)) {
      $rows[] = $r;
  }
  print json_encode($rows);
}

 ?>
