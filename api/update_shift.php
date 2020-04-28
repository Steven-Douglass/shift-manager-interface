<?php
  include('./connect.php');
  $db = ConnectDB();
  $sql = "CALL HotelManagement_Team_4.update_shift('".$_POST['sTime']."','".$_POST['eTime']."','";
  $sql .= $_POST['sDate']."','".$_POST['eDate']."',".$_POST['eventID'].",".$_POST['modID'].");";
  
  $stmt = $db->prepare($sql);
  $stmt->execute();

  echo "Success";

?>