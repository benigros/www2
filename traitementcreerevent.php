
<?php session_start();
include("identifiants.php");

echo var_dump($_POST);



$marequete12 = "INSERT  INTO evenement (AdresseMail_Utilisateur,Nom_Evenement,Categorie_Evenement,Date_Evenement,Description_Evenement,Nom_Groupe,validation) 
			 VALUES ( '".$_SESSION['AdresseMail_Utilisateur']."','".$_POST['Nom_Evenement']."','".$_POST['Categorie_Evenement']."','".$_POST['Date_Evenement']."','".$_POST['Description_Evenement']."'
			 ,'".$_POST['Visibilite']."','non')";
			 
			 			 
 $res12=mysql_query($marequete12);	

//echo $marequete12;
$id = "select * from evenement where Nom_Evenement='".$_POST['Nom_Evenement']."'";
$getid=mysql_query($id);
$Tuple2=mysql_fetch_array($getid);
echo $Tuple2['Id_Evenement'];
echo "'''";

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


mysql_close($link);

?>


