<?php session_start();
include("identifiants.php");



if($_SESSION['AdresseMail_Utilisateur']=='god@gmail.com')
{
	$marequete12 = "UPDATE evenement SET validation='oui' WHERE Id_Evenement='".$_POST['idevenement']."'"; 
	$res=mysql_query($marequete12);	
	
	
	$marequete12 = "UPDATE participe SET statut='non' WHERE Id_Evenement='".$_POST['idevenement']."'"; 
	$res=mysql_query($marequete12);	
	
	$marequete12 = "UPDATE participe SET statut='oui' WHERE Id_Evenement='".$_POST['idevenement']."' AND AdresseMail_Utilisateur='".$_POST['createur']."'"; 
	$res=mysql_query($marequete12);	

	//header('Location:gererevenements.php');
}




else{if(isset($_POST['recherche']))
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
//header('Location:mesevenements.php');
}










mysql_close($link);

?>
