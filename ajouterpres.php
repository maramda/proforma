
<!DOCTYPE html>
<html lang="en">
<head>
<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
</head>
<body> 

<div class="div_inscription">
	
<h3> Ajouter Presence </h3>
<form action ="Ajouter_pres.php" method="post">


</br> </br> </br>
<label for="nom">Nom  :</label>
<input type="text" name="nom" id="nom" required="required"/> 
<br> <br>
	
<label for="username">Nom utilisateur :</label>
<input type="text" name="username" id="username" required="required"/> 
<br> <br>


<label for="type">Type :</label>
<SELECT name="type" size="1">
<OPTION>entreprise
<OPTION>condidature
</SELECT>
<br> <br>



<label for="formation">Formation :</label>
<input type="text" name="formation" id="formation" required="required" /> 
<br> <br>

<label for="formateur">Formateur :</label>
<input type="text" name="formateur" id="formateur" required="required" /> 
<br> <br>

<label for="pres">pres  :</label>
<input type="number" name="pres" id="pres" required="required" /> 
<br> <br>

<button id="confirmer" type="submit"> Confirmer </button>
<br> <br><br> <br>
<a href="../index.php"> <h3> Connexion </h3> </a>


</form>
</div>
</body>