<?php
session_start();

include("identifiants.php");




if($_SESSION['AdresseMail_Utilisateur']='god@gmail.com')
{
	$r2='Delete from evenement where Nom_Evenement="'.$_POST['nomevenement'].'"';
	$res2=mysql_query($r2);
	
	
	$r3= 'Delete from participe where
	(Id_Evenement IN (Select Id_Evenement from evenement where evenement.Nom_Evenement = "'.$_POST['nomevenement'].'")';
	$res3=mysql_query($r3);
}
else{
	$r1= 'Delete from participe where Id_Evenement= "'.$_POST['idevenement'].'"';
	$res1=mysql_query($r1);
}
header('Location:mesevenements.php');

?>