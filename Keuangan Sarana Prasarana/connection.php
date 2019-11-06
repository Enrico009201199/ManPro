<?php
    $serverName = "10.100.70.70\akreditasi2020";
    $DBName = "Akreditasi2020";
    $UID = "guestManPro";
    $PWD = "Testing123";
    $connectionInfo = array("Database"=> $DBName,"UID" => $UID, "PWD"=>$PWD);

    $conn = sqlsrv_connect($serverName,$connectionInfo);
    
    //Cek Koneksi Ke Database
    // if( $conn ) {
    //     echo "Connection established.<br />";
    // }else{
    //     echo "Connection could not be established.<br />";
    //     die( print_r( sqlsrv_errors(), true));
    // }
?>