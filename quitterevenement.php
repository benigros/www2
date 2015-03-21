<?php
session_start();

include("identifiants.php");

echo var_dump($_POST);
echo $_POST['nomevenement'];


if($_SESSION['AdresseMail_Utilisateur']='god@gmail.com')
{
	
	
	$r3= 'DELETE FROM `projetweb`.`participe` WHERE Id_Evenement IN (Select Id_Evenement from evenement where Nom_Evenement ="'.$_POST['nomevenement'].'")';
	$res3=mysql_query($r3);
	echo $res3;
	
	
	 $r2='Delete from evenement where Nom_Evenement="'.$_POST['nomevenement'].'"';
	 $res2=mysql_query($r2);
	
	 echo $res2;
	
	
	
	
	
header('Location:gererevenements.php');
}
else{
	echo "1";
	
	$r3= 'DELETE FROM `projetweb`.`participe` WHERE Id_Evenement IN (Select Id_Evenement from evenement where Nom_Evenement ="'.$_POST['nomevenement'].'") 
	AND AdresseMail_Utilisateur = "'.$_SESSION['AdresseMail_Utilisateur'].'"';
	$res3=mysql_query($r3);
	
	
	//header('Location:mesevenements.php');
}


?>