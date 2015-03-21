<?php session_start();
include("identifiants.php");

echo var_dump($_POST);

$id = "select * from evenement where Nom_Evenement='".$_POST['mes_evenements']."'";
$getid=mysql_query($id);
$Tuple2=mysql_fetch_array($getid);


 $marequete14="INSERT INTO participe (AdresseMail_Utilisateur,Id_Evenement,statut) VALUES ('".$_SESSION['AdresseMail_Utilisateur']."','".$Tuple2['Id_Evenement']."','att')";
 echo $marequete14;
 $res14=mysql_query($marequete14);
 
 echo $Tuple2['Id_Evenement']."y";
// echo $getid;
// echo "------";
// echo $marequete14;
			 

$i=0;
while (list($id_membre,$chaqueadresse)=each($_POST['Invitation_Evenement']))
{
	
	echo "1";
	echo "  ";
	echo $id_membre;
	echo "  ";
	echo $chaqueadresse;
	echo "--------";
	echo $getid;

 if($chaqueadresse != $_SESSION['AdresseMail_Utilisateur'])
 {
	
	 $marequete13="INSERT INTO participe (AdresseMail_Utilisateur,Id_Evenement,statut) VALUES ('".$chaqueadresse."','".$Tuple2['Id_Evenement']."','att')";
 echo $marequete13;
    $res13=mysql_query($marequete13);	
 }
$i++;
}

header('Location:mesevenements.php');



?>
