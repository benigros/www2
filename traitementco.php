<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<?php session_start();
include("identifiants.php");
?>
<meta charset="UTF-8">
<title></title>
</head>

<?php 

echo "2";

$req1 = "SELECT * FROM Utilisateur WHERE AdresseMail_Utilisateur = '".$_POST['AdresseMail_Utilisateur']."'";
$res1 = mysql_query($req1);
$nbres1=mysql_num_rows($res1);

if ($nbres1 != 0)
{
	echo "1";
	$req2 = "SELECT * FROM Utilisateur WHERE AdresseMail_Utilisateur = '".$_POST['AdresseMail_Utilisateur']."' AND Motdepasse = '".$_POST['Motdepasse']."'";
	$res2 = mysql_query($req2);
	$nbres2=mysql_num_rows($res2);
	
	echo $nbres2;
	
	
	if ( $nbres2 != 0)
	{
		echo "123";
		
		$_SESSION['AdresseMail_Utilisateur']=$_POST['AdresseMail_Utilisateur'];
		
		
		$req3= "SELECT Prenom_Utilisateur FROM Utilisateur WHERE AdresseMail_Utilisateur = '".$_POST['AdresseMail_Utilisateur']."'";
		$res3=mysql_query($req3);
		$prenom=mysql_result($res3,0,'Prenom_Utilisateur');
		
		$_SESSION['Prenom_Utilisateur']=$prenom;
		
		$req4= "SELECT Nom_Utilisateur FROM Utilisateur WHERE AdresseMail_Utilisateur = '".$_POST['AdresseMail_Utilisateur']."'";
		$res4=mysql_query($req4);
		$nom=mysql_result($res4,0,'Nom_Utilisateur');
		$_SESSION['Nom_Utilisateur']=$nom;
		
		 
		header( 'Location:RechercheEvent.php');
		
	}
	else{
		$_SESSION['messageConnexion']='Mot de passe erroné';
		 header( 'Location:Connexion.php');
		
		
	}
}
else{ 
	$_SESSION['messageConnexion']= 'Identifiant erroné';
	header( 'Location:Connexion.php');
}






mysql_close($link);

?>
<body>
<p>Si tu veux changer tes iden, <a href="Connexion.php">clique ici</a> pour revenir à la page connexion.</p>
</body>
</html>