<?php

include("includes/connect.php");

$req = $bdd->query("SELECT * FROM utilisateur ");
$donnees = $req->fetch();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="Vue/style.css">
<meta charset="utf-8">

</head>
<body> 

<?php 
session_start();
?> 

<div class="div_connexion">
<h3> Connexion </h3>
</br> </br> </br>

<form action = "Vue/Verifier_connexion.php" method="post">
<label for="login">Nom utilisateur :</label>
<input type="text" name="login" id="login" required="required" /> 
<br> <br>

<label for="password">Mot de passe :</label>
<input type="password" name="password" id="password" required="required" /> 
<br> <br>
<button id="connecter" type="submit"> Connecter </button>
<br> <br><br>
<a href="Vue/Inscription.php"> <h3> Inscription </h3> </a>
</form>
</div>


</body>