<?php 
 require_once('../Model/connexion_db.php');
session_start();

session_unset();
session_destroy();

header("location: ../acceuil.php");





 ?>