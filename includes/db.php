<?php
    //  assoc array is veiliger dan de standaard manier van connecten
    $db['db_host'] = "localhost";
    $db['db_user'] = "root";
    $db['db_pass'] = "";
    $db['db_name'] = "app_daf";

    // Zet om in constants
    foreach($db as $key => $value){
        define(strtoupper($key), $value); 
    }
    
    // Connect met de constants 
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//    if(!$connection){
//        echo "database connectie werkt niet"; 
//    }
?>