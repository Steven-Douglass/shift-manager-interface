<?php
  include('./connect.php');
  $db = ConnectDB();
  $sql = "Select * from HotelManagement_Team_4.Locations ORDER BY location_name"; 
  $stmt = $db->prepare($sql);
  $stmt->execute();

  echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>