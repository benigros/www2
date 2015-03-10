<html>
<head>
<?php session_start();
include("identifiants.php");
?>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<p> votre adresse et votre mot de passe sont :
<?php

echo $_POST['adresse'];
echo $_POST['mdp'];

$marequete = "INSERT  INTO Logs VALUES ( '".$_POST['adresse']."','".$_POST['mdp']."','".$_POST['Nom']."','".$_POST['Prenom']."')  ";
echo $marequete."yugtuyruier";
$result=mysql_query($marequete);
echo $result;
mysql_close($link);

?>
< <a href="Inscription.php">clique ici</a> pour revenir à la page inscription.</p>
</body>
</html>