<?php
    $user="root";
    $mdp="";
    $serveur="localhost";
    $bd="ts1";
    $dns="mysql:host=$serveur;dbname=$bd";
    try
    {
        $idcon=new PDO($dns, $user, $mdp);
        
    }
    catch (PDOException $e)
    {
        echo "Erreur de connexion à la base de donnée : " .$e->getMessage();
    }
?>