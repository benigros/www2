<?php
session_start();

include("identifiants.php");

echo $_POST['nomgroupe'];

if($_SESSION['AdresseMail_Utilisateur']='god@gmail.com')
{
	$r2='Delete from groupe where Nom_groupe="'.$_POST['nomgroupe'].'"';
	$res2=mysql_query($r2);
	
	$r3= 'Delete from appartient where Nom_groupe= "'.$_POST['nomgroupe'].'"';
	$res3=mysql_query($r3);
}
else{
	$r1= 'Delete from appartient where Nom_groupe= "'.$_POST['nomgroupe'].'"';
	$res1=mysql_query($r1);
}

header('Location:mesgroupes.php');

?>