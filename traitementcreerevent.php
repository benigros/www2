
<?php session_start();
include("identifiants.php");

echo var_dump($_POST);


$marequete12 = "INSERT  INTO evenement (Nom_Evenement,Categorie_Evenement,Date_Evenement,Description_Evenement) 
			 VALUES ( '".$_POST['Nom_Evenement']."','".$_POST['Categorie_Evenement']."','".$_POST['Date_Evenement']."','".$_POST['Description_Evenement']."')";

$res=mysql_query($marequete12);	

echo $marequete12;

	 

header('Location:RechercheEvent.php');


mysql_close($link);

?>

