<?php
include("includes/connect.php");

//$id= $_GET['id'];
$req6 = $bdd->query("SELECT * FROM utilisateur  ");
$donnees = $req6->fetch();
$req7 = $bdd->query("SELECT * FROM pres ");
$donnees2 = $req7->fetch();
 
$req1 = $bdd->query("SELECT * FROM coordonees");
$req2 = $bdd->query("SELECT * FROM actualite");
$req3 = $bdd->query("SELECT * FROM formation");
$req4 = $bdd->query("SELECT * FROM galerie");

 ?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<section>
           <div class="section-compte">
           
           <table>
           <tr>
           <th>ID</th>
           <th>Nom</th>
           <th>Mot de passe</th>
           <th>nom d'utlisateur</th>
           <th>Email</th>
           <th>Type : </th>
           
           </tr>
           <tr>
           <td><?php echo $donnees['id']; ?></td>
           <td><?php echo $donnees['nom']; ?></td>
           <td><?php echo $donnees['password']; ?></td>
           <td><?php echo $donnees['login']; ?></td>
           <td><?php echo $donnees['mail']; ?></td>
           <td><?php echo $donnees['type']; ?></td>
           
           </tr>
           </table>
           
           </div>
</section>

</body>
</html>