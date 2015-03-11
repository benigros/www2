
<?php session_start();
include("identifiants.php");





$verifmail = "SELECT * FROM Utilisateur WHERE AdresseMail_Utilisateur = '".$_POST['AdresseMail_Utilisateur']."'";

$resverif = mysql_query($verifmail);
$nbresverif=mysql_num_rows($resverif);









 if( $nbresverif != 0)
 {


header('Location:Connexion.php');
	

 }


 else{
	 if (  $_POST['Mdp'] == $_POST['confmdp'])
		 {
			
			
			 $marequete = "INSERT  INTO Utilisateur (Nom_Utilisateur,Prenom_Utilisateur,Sexe,Date_de_Naissance,AdresseMail_Utilisateur,Adresse_Utilisateur,CodePostal_Utilisateur,Ville_Utilisateur,Mdp) 
			 VALUES ( '".$_POST['Nom_Utilisateur']."','".$_POST['Prenom_Utilisateur']."','".$_POST['Sexe']."','".$_POST['Date_de_Naissance']."',
			 '".$_POST['AdresseMail_Utilisateur']."',
			 '".$_POST['Adresse_Utilisateur']."','".$_POST['CodePostal_Utilisateur']."','".$_POST['Ville_Utilisateur']."','".$_POST['Mdp']."')  ";
			 
			 echo $marequete;
			
		$result=mysql_query($marequete);
		
		$_SESSION["AdresseMail_Utilisateur"]=$_POST['AdresseMail_Utilisateur'];
		$_SESSION['Prenom_Utilisateur']=$_POST['Prenom_Utilisateur'];
		$_SESSION['Nom_Utilisateur']=$_POST['Nom_Utilisateur'];

			header('Location:RechercheEvent.php');
		 }
	 else{ 

	header('Location:inscription.php');
 }
 }
mysql_close($link);

?>

