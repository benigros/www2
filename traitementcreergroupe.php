<?php 


 session_start();
include("identifiants.php");

echo $_POST['Nom_Groupe'];


$marequete12 = "INSERT  INTO groupe (AdresseMail_Utilisateur,Nom_Groupe,Description_Groupe) 
			 VALUES ('".$_SESSION['AdresseMail_Utilisateur']."', '".$_POST['Nom_Groupe']."','".$_POST['Description_Groupe']."')";

			 
$marequete14="INSERT INTO appartient (AdresseMail_Utilisateur,Nom_Groupe,statut) VALUES ('".$_SESSION['AdresseMail_Utilisateur']."','".$_POST['Nom_Groupe']."','oui')";
			 
echo $marequete14;
			 
$i=0;
while (list($id_membre,$chaqueadresse)=each($_POST['Invitation_Groupe']))
{
	echo $id_membre;
	echo $chaqueadresse;
	echo $_POST['Nom_Groupe'];
	
	if($chaqueadresse != $_SESSION['AdresseMail_Utilisateur'])
	{
	$marequete13="INSERT INTO appartient (AdresseMail_Utilisateur,Nom_Groupe,statut) VALUES ('".$chaqueadresse."','".$_POST['Nom_Groupe']."','non')";
     $res13=mysql_query($marequete13);	
	}
$i++;
}


			 



			 
 $res12=mysql_query($marequete12);	
 $res14=mysql_query($marequete14);	


	 

//header('Location:RechercheGroupe.php');


mysql_close($link);

?>

