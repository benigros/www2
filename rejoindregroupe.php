<?php session_start();
include("identifiants.php");

echo $_POST['nomgroupe'];
echo $_SESSION['AdresseMail_Utilisateur'];
echo 'oui' ;

if(isset($_POST['recherche']))
{
$marequete12="INSERT INTO appartient (AdresseMail_Utilisateur,Nom_Groupe,statut) VALUES ('".$_SESSION['AdresseMail_Utilisateur']."','".$_POST['nomgroupe']."','oui')";

}

else{

$marequete12 = "UPDATE appartient SET statut='oui' 
WHERE Nom_Groupe='".$_POST['nomgroupe']."' AND AdresseMail_Utilisateur='".$_SESSION['AdresseMail_Utilisateur']."'"; 
}

$res=mysql_query($marequete12);	

echo $marequete12;



header('Location:mesgroupes.php');


mysql_close($link);

?>