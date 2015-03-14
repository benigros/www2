<?php session_start();
include("identifiants.php");

echo var_dump($_POST);

if($_POST['Nom_Evenement'] != NULL)
{
	if( $_POST['Categorie_Evenement'] != "blanc")
	{
		
		$_SESSION['accueil']=1;
		$_SESSION['Nom_Evenement']=$_POST['Nom_Evenement'];
		$_SESSION['Categorie_Evenement']=$_POST['Categorie_Evenement'];
		$_SESSION['Date_Evenement']=$_POST['Date_Evenement'];
		
		header('Location:accueil.php');

	}
	else{
		$_SESSION['accueil']=2;
		$_SESSION['Nom_Evenement']=$_POST['Nom_Evenement'];
		$_SESSION['Date_Evenement']=$_POST['Date_Evenement'];
	
	echo $requete13;
	header('Location:accueil.php');
	}
}
else{
	if( $_POST['Categorie_Evenement'] != "blanc")
	{
		$_SESSION['accueil']=3;
		echo "2";
		$_SESSION['Categorie_Evenement']=$_POST['Categorie_Evenement'];
		$_SESSION['Date_Evenement']=$_POST['Date_Evenement'];
	
	$_SESSION['indAccueil']=$res13;

	header('Location:accueil.php');
	}
	else{
		
		$_SESSION['accueil']=4;
		$_SESSION['Date_Evenement']=$_POST['Date_Evenement'];
		echo "3";
		
		header('Location:accueil.php');
	}
}






	 

//header('Location:RechercheEvent.php');


mysql_close($link);

?>
