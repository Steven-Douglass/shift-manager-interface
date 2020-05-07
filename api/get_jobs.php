<?php
  include('./connect.php');
  $db = ConnectDB();
  $sql = "Select * from HotelManagement_Team_4.PositionList ORDER BY Position_"; 
  $stmt = $db->prepare($sql);
  $stmt->execute();

  echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>