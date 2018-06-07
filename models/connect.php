<?php 

    $serverName = 'localhost';
    $userName = '';
    $password = '';
    $dbname = 'memes';

    try {
       
        $connect = new PDO("mysql:host=".$serverName.";dbname=".$dbname ,$userName , $password);
        
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "connect to the database ";

    } catch(PDOException $e){
        echo "erreur de connexion ".$e->getMessage();
    }
        
    $connect->query("SET NAMES UTF8"); //Solution encodage UTF8

?>