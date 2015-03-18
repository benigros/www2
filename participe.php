<?php session_start();
include("identifiants.php");

echo $_POST['idevenement'];



if(isset($_POST['recherche']))
{
	echo "1";
$marequete12="INSERT INTO participe (AdresseMail_Utilisateur,Id_Evenement,statut) 
VALUES ('".$_SESSION['AdresseMail_Utilisateur']."','".$_POST['idevenement']."','oui')";

}

else{

echo "2";
$marequete12 = "UPDATE participe SET statut='oui' 
WHERE Id_Evenement='".$_POST['idevenement']."' AND AdresseMail_Utilisateur='".$_SESSION['AdresseMail_Utilisateur']."'"; 




}
$res=mysql_query($marequete12);	

echo $marequete12;



header('Location:mesevenements.php');


mysql_close($link);

?>