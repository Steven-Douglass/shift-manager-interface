<?php
  //print file_get_contents('http://ec2-54-89-210-177.compute-1.amazonaws.com/api/departments/employees/2');
  $response = file_get_contents('http://ec2-54-89-210-177.compute-1.amazonaws.com/api/departments/employees/2');
  $response = json_decode($response);
  var_dump($response);:
?>
