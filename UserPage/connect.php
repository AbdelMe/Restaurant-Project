<?php
    try{
    $chaine = "mysql:host=localhost;dbname=Restau"; 
    $user="root";
    $Dbt_pass=""; 
    $dbt=new PDO ( $chaine, $user , $Dbt_pass );
    // echo 'connected'; 
    }
    catch (PDOException $e){
        echo"erreur:".$e->getmessage();
    }


?>