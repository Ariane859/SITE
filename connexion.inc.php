<?php
    try {
        $connection=new PDO('mysql:host=localhost;dbname=examen','root','');
        $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } 
    catch (PDOException $e) {
        echo "Connexion echoué" .$e->getMessage();
    }
?>