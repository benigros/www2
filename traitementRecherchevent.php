<?php session_start();
include("identifiants.php");

echo var_dump($_POST);

if($_POST['Nom_Evenement'] != NULL)
{
	echo "1";
$requete13="SELECT * FROM evenement WHERE Nom_Evenement = '".$_POST['Nom_Evenement']."'";
echo $requete13;
}
else{
	if( $_POST['Categorie_Evenement'] != NULL)
	{
		echo "2";
	$requete13="SELECT * FROM evenement WHERE Categorie_Evenement = '".$_POST['Categorie_Evenement']."'";
	}
	else{
		echo "3";
		$requete13="SELECT * FROM evenement WHERE Date_Evenement >= '".$_POST['Date_Evenement']."'";
		}
}


$res=mysql_query($marequete13);	

echo $marequete13;

	 

//header('Location:RechercheEvent.php');


mysql_close($link);

?>
