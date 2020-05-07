<?php
  include('./connect.php');
  $db = ConnectDB();
  $sTime = $_POST['sTime'];
  $sDate = $_POST['sDate'];
  $eTime = $_POST['eTime']; #because the call was being a jerk
  $eDate = $_POST['eDate'];
  $modID = $_POST['modID'];
  $job = $_POST['job'];
  $loc = $_POST['loc'];
  $empID = $_POST['empID'];
  $sql = "CALL HotelManagement_Team_4.create_shift('$sTime','$eTime','$sDate','$eDate',$modID,$job,$loc,$empID)";
  
  $stmt = $db->prepare($sql);
  $stmt->execute();

  echo "Success";

?>