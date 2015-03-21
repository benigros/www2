<?php session_start();
include("identifiants.php");


			 

			 
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


		




header('Location:RechercheGroupe.php');


mysql_close($link);

?>

