<?php 

session_start();
include("identifiants.php");

$_SESSION['recherche']=1;
 if($_POST['Nom_Groupe'] != NULL)
{
	$_SESSION['Nom_Groupe']=$_POST['Nom_Groupe'];
	echo $_SESSION['Nom_Groupe'];
	}
else { 
$_SESSION['Nom_Groupe']="0";
echo $_SESSION['Nom_Groupe'];
}



header('Location:RechercheGroupe.php');

?>