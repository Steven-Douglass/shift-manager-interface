<?php

ConnectDB();

// ConnectDB() - takes no arguments, returns database handle
// USAGE: $dbh = ConnectDB();
function ConnectDB() {

   /*** mysql server info ***/
    $hostname = 'ec2-54-89-210-177.compute-1.amazonaws.com';  // Local host, i.e. running on elvis
    $username = 'team-4';           // Your MySQL Username goes here
    $password = 'team1rulez';           // Your MySQL Password goes here
    $dbname   = 'HotelManagement_Team_4';        

   try {
       $dbh = new PDO("mysql:host=$hostname;dbname=$dbname",
                      $username, $password);
    }
    catch(PDOException $e) {
        die ('PDO error in "ConnectDB()": ' . $e->getMessage() );
    }

    return $dbh; 
}

?>
