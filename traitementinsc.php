<html>
<head>
<?php session_start();
include("identifiants.php");
?>
<meta charset="UTF-8">
<title></title>
</head>


<?php

$verifmail = "SELECT * FROM Logs WHERE adresse = '".$_POST['adresse']."'";

$resverif = mysql_query($verifmail);
$nbresverif=mysql_num_rows($resverif);

echo $nbresverif;
echo var_dump($_POST);




if( $nbresverif != 0)
{
	header('Location : inscription.php');
}
else{
	if (  $_POST['mdp'] == $_POST['confmdp'])
		{
			$marequete = "INSERT  INTO Logs VALUES ( '".$_POST['adresse']."','".$_POST['mdp']."','".$_POST['Nom']."','".$_POST['Prenom']."')  ";

			$result=mysql_query($marequete);

			header('Location : Connexion.php');
		}
	else{ header('Location : inscription.php'); }
	}
mysql_close($link);

?>

</html>