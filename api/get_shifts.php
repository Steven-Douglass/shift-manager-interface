<?php
  include('./connect.php');
  $db = ConnectDB();
  $sql = "CALL HotelManagement_Team_4.get_shifts(".$_POST['manager_id'].")"; 
  $stmt = $db->prepare($sql);
  $stmt->execute();

  echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>