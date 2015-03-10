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

$adresse= $_POST['adresse'];

$req1 = "SELECT * FROM logs WHERE adresse = '".$_POST['adresse']."'";
$res1 = mysql_query($req1);
$nbres1=mysql_num_rows($res1);

if ($nbres1 != 0)
{
	$req2 = "SELECT * FROM logs WHERE adresse = '".$_POST['adresse']."' AND mdp = '".$_POST['mdp']."'";
	$res2 = mysql_query($req2);
	$nbres2=mysql_num_rows($res2);
	
	
	if ( $nbres2 != 0)
	{
		
		
		$_SESSION["adresse"]=$_POST['adresse'];
		$req3 = "SELECT id FROM logs WHERE adresse = '".$_POST['adresse']."' AND mdp = '".$_POST['mdp']."'";
		$res3=mysql_query($req3);
		$iduser=mysql_result($res3,0,'id');
		$_SESSION['id']=$iduser;
		
		
		
		$_SESSION['prenom']=$_POST['prenom'];
		
		 
		header( 'Location: RechercheEvent.php');
		
	}
	else{
		header( 'Location: Connexion.php');
		
	}
}






mysql_close($link);

?>
<body>
<p>Si tu veux changer tes iden, <a href="Connexion.php">clique ici</a> pour revenir à la page connexion.</p>
</body>
</html>