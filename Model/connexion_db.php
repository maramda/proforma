<?php
 $serveur = 'localhost' ; 
 $nom_utilisateur = 'root'; 
 $mdp= '';  

 try 
 {  
    $connexion = new PDO('mysql:host=localhost;dbname=proforma',$nom_utilisateur,$mdp);
     //echo "Connexion au data base tdw réussie ";
 }  
catch (PDOException $e)
{
     //echo "Echec de la connexion ".$e->getMessage();
} 

?> 