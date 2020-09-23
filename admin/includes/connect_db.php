<?php
$servername = "localhost";
$login = "login";
$password = "password";
// Connexion à la base de données
	try {
		$bdd = new PDO("mysql:host=$servername;dbname=proforma", 'root', '');

	} catch(Exception $e) {
		die('Erreur: '.$e->getMessage());
		
	}$bdd->query("SET NAMES UTF8")	
	?>è