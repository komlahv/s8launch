<?php
  require('../Config.php');
  $link = new mysqli($Host . ":" . $Port, $Username, $Password, $Database);

  if (mysqli_connect_errno())
  {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else{
    $data = json_decode(file_get_contents('php://input'), true);
    $firstName = $link->real_escape_string($data['firstName']);
    $lastName = $link->real_escape_string($data['lastName']);
    $phoneNumber = $link->real_escape_string($data['phoneNumber']);
    $email = $link->real_escape_string($data['email']);
    $address = $link->real_escape_string($data['address']);
    $type = $link->real_escape_string($data['type']);
    $model = $link->real_escape_string($data['model']);
    $color = $link->real_escape_string($data['color']);

    mysqli_query($link,"INSERT INTO orders(firstname, lastname, phoneNumber, email, address, type, model, color) VALUES ('$firstName', '$lastName', '$phoneNumber', '$email', '$address', '$type', '$model', '$color')");
    echo 'SUCCESS';
  }


 ?>
