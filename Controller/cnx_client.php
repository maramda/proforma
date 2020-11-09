<?php 

require_once('../Model/CnxClient.class.php');
//$id=$_GET['id'];
$client = new CnxClient($_POST['login'], $_POST['password']);
//$admin = new CnxAdmin($_POST['login'],$_POST['password']);
$client->verifier();
header('location:../acceuil.php');
echo "oui";
exit();
?>
