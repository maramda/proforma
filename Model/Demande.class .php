<?php
class Demande{
private $theme;   
private $date;
private $code;

                


function __construct($theme,$date,$code){
$this->theme = $theme;
$this->date = $date;
$this->code = $code;


}


public function ajouter(){ 

include('../includes/connect.php');
    
	
		$req = $bdd->exec ("INSERT INTO `demandeformation`(
            'theme',
            'date',
            'code' , 
           
           
          ) 
        VALUES ('$this->theme',
                '$this->pretheme',
                '$this->code',
                
        )");
		
		echo'oui';
                //return TRUE;

}



}


//$instance = new User($_POST['theme'],$_POST['pretheme'],$_POST['login'],$_POST['prethem'],$_POST['pass'],$_POST['type']);


?>