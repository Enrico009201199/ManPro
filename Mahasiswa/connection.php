<?php
        //    $servername = "localhost";
        //    $username = "root";
        //    $password = "";
        //    $dbName = "manpro";
           
        //    // Create connection
        //    $conn = new mysqli($servername, $username, $password, $dbName);
        //    // Check connection
        //    if ($conn->connect_error) {
        //        die("Connection failed: " . $conn->connect_error);
        //    }
        
        //ini konek ke server ftis
           $serverName = "10.100.70.70\akreditasi2020";
           $DBName = "Akreditasi2020";
           $UID = "guestManPro";
           $PWD = "Testing123";
           $connectionInfo = array("Database"=> $DBName,"UID" => $UID, "PWD"=>$PWD);
       
           $conn = sqlsrv_connect($serverName,$connectionInfo);
           
           

    
?>