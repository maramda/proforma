<?php
 $serveur = 'localhost' ; 
 $login = 'root'; 
 $password= '';  

 try 
 {  
    $connexion = new PDO('mysql:host=localhost;dbname=proforma',$login,$password);
     //echo "Connexion au data base tdw réussie ";
 }  
catch (PDOException $e)
{
     //echo "Echec de la connexion ".$e->getMessage();
} 

?> 