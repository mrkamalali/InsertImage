<?php
 
    $db_host='localhost';
    $db_user='root';
    $db_pass='';
    $db_name='photo_db';
 
    try {
        $db_conn= new PDO("mysql:host={$db_host};dbname=photo",$db_user,$db_pass);
        $db_conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 
    }catch(PDOException $e){
        echo $e->getMessage();
    }
 
?>