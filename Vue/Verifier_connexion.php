
<?php

require_once('../Model/connexion_db.php');
session_start();

$login = $_POST['login'] ;
$password= $_POST['password'];

$sql = $connexion->query("SELECT * from utilisateur WHERE login = '$login' and password = '$password'");

if($result = $sql->fetch() and $result['login'] == $login and $result['password'] == $password ) {
    session_start();
    $_SESSION["login"]= $_POST['login'] ;
    $_SESSION["password"]= $_POST['password'];


if ($login == 'admin' && $password == 'admin')
    {
       header("location:../partieclient/acceuil.php");
    }
	else
	{
       header("location:../partieclient/acceuil.php");
   }
}

else
{ 
 header("location: Inscription.php");

}
  







?>