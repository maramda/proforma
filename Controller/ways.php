
<?php 
     include("../includes/connect.php");

     $req = $bdd->query("SELECT * FROM utilisateur  ");
     $donnees = $req->fetch();
    //$id=$donnees['id'];
    //echo $id;

 // header('Location:../partieclient/acceuil.php?id=$id');      
?>
<!DOCTYPE html>
<html>
<head></head>
<body>

<a href="../partieclient/acceuil.php?id=<?php echo $donnees['id']; ?>">Aff</a>

</body>

    </html>
