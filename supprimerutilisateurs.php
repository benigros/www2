<?php
session_start();

include("identifiants.php");




if($_SESSION['AdresseMail_Utilisateur']='god@gmail.com')
{
	$r2='Delete from utilisateur where AdresseMail_Utilisateur="'.$_POST['adresseutilisateur'].'"';
	$res2=mysql_query($r2);
	
	$r3= 'Delete from appartient where AdresseMail_Utilisateur="'.$_POST['adresseutilisateur'].'"';
	
	$res3=mysql_query($r3);
	
	$r4= 'Delete from participe where AdresseMail_Utilisateur="'.$_POST['adresseutilisateur'].'"';
	
	$res4=mysql_query($r4);
}

header('Location:gererutilisateurs.php');

?>