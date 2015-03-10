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
$res1 = mysql_query('$req1');

if ( mysql_num_rows('$res1') != NULL)
{
	$req2 = "SELECT * FROM logs WHERE adresse = '".$_POST['adresse']."' AND mdp = '".$_POST['mdp']."'";
	$res2 = mysql_num_rows('$req2');
	
	if ( mysql_num_rows('$res2') != NULL)
	{
		echo ' Connexion réussie ';
		
	}
	else{
		echo 'mot de passe erroné';
	}
}
else {
	echo 'Cet identifiant est déjà pris';
}





mysql_close($link);

?>
<body>
<p>Si tu veux changer tes iden, <a href="Connexion.php">clique ici</a> pour revenir à la page connexion.</p>
</body>
</html>