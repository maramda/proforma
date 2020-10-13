<!DOCTYPE html>
<html lang="en">
<head>
<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
</head>
<body> 

<div class="div_inscription">
	
<h3> Inscription d'un nouveau utilisateur </h3>
<form action ="Ajouter_user.php" method="post">


</br> </br> </br>
<label for="nomm">Nom  :</label>
<input type="text" name="nomm" id="nom" required="required"/> 
<br> <br>


	
<label for="login">Nom utilisateur :</label>
<input type="text" name="login" id="login" required="required"/> 
<br> <br>

<label for="password">Mot de passe :</label>
<input type="text" name="password" id="password" required="required" /> 
<br> <br>

<label for="mail_u">Mail :</label>
<input type="text" name="mail_u" id="mail" required="required"/> 
<br> <br>
<label for="type_u">Type :</label>
<SELECT name="type_u" size="1">
<OPTION>entreprise
<OPTION>condidature
</SELECT>
<br> <br>
<button id="confirmer" type="submit"> Confirmer </button>
<br> <br><br> <br>
<a href="../index.php"> <h3> Connexion </h3> </a>


</form>
</div>
</body>