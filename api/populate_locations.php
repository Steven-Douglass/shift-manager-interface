<?php
  include('./connect.php');
  $db = ConnectDB();

  $sql = "CALL populate_locations";  
  $stmt = $db->prepare($sql);
  $stmt->execute();

  echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>