<?php 


 session_start();
include("identifiants.php");

echo var_dump($_POST);


$marequete12 = "INSERT  INTO groupe (Nom_Groupe,Description_Groupe) 
			 VALUES ( '".$_POST['Nom_Groupe']."','".$_POST['Description_Groupe']."')";

$res=mysql_query($marequete12);	

echo $marequete12;

	 

header('Location:RechercheGroupe.php');


mysql_close($link);

?>

