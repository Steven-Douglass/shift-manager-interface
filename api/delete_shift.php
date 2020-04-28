<?php
  include('./connect.php');
  $db = ConnectDB();

  $sql = "CALL HotelManagement_Team_4.delete_shift(".$_POST['shift_id'].")";  
  $stmt = $db->prepare($sql);
  $stmt->execute();

  echo "Success"
?>