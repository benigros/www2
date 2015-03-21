<html>

<?php
include("head.php");
include("identifiants.php");

?>
<body>
 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php if(isset($_SESSION['AdresseMail_Utilisateur']))
{
	?><h1>Evènement(s)</h1>
	<?php
	
}
else { ?>

<h1>Accueil</h1>

<?php } ?>
<br/><br/><br/>
<?php    

// $_SESSION['Nom_Evenement']=$_POST['Nom_Evenement'];
		// $_SESSION['Categorie_Evenement']=$_POST['Categorie_Evenement'];
		// $_SESSION['Date_Evenement']=$_POST['Date_Evenement'];
		
if(isset($_SESSION['accueil']))
{


	if ($_SESSION['accueil']==1)
	{
			$requete13="SELECT * FROM evenement WHERE Nom_Evenement = '".$_SESSION['Nom_Evenement']."'
	AND Categorie_Evenement = '".$_SESSION['Categorie_Evenement']."'
	AND Date_Evenement >= '".$_SESSION['Date_Evenement']."' 
	AND (Nom_Groupe IN (SELECT Nom_Groupe FROM appartient 
	WHERE AdresseMail_Utilisateur='".$_SESSION['AdresseMail_Utilisateur']."')OR (Nom_Groupe='Public')) validation='oui'";
	}
	if ($_SESSION['accueil']==2)
	{
	$requete13="SELECT * FROM evenement WHERE Nom_Evenement = '".$_SESSION['Nom_Evenement']."'
	AND Date_Evenement >= '".$_SESSION['Date_Evenement']."'
    AND (Nom_Groupe IN (SELECT Nom_Groupe FROM appartient 
	WHERE AdresseMail_Utilisateur='".$_SESSION['AdresseMail_Utilisateur']."')OR (Nom_Groupe='Public')) validation='oui'";
	}
	if ($_SESSION['accueil']==3)
	{
	$requete13="SELECT * FROM evenement WHERE Categorie_Evenement = '".$_SESSION['Categorie_Evenement']."'
	AND Date_Evenement >= '".$_SESSION['Date_Evenement']."'
	AND (Nom_Groupe IN (SELECT Nom_Groupe FROM appartient 
	WHERE AdresseMail_Utilisateur='".$_SESSION['AdresseMail_Utilisateur']."')OR (Nom_Groupe='Public')) validation='oui'";
	
	}
	if ($_SESSION['accueil']==4)
	{
	$requete13="SELECT * FROM evenement WHERE Date_Evenement >= '".$_SESSION['Date_Evenement']."'
	AND (Nom_Groupe IN (SELECT Nom_Groupe FROM appartient 
	WHERE AdresseMail_Utilisateur='".$_SESSION['AdresseMail_Utilisateur']."')OR (Nom_Groupe='Public'))validation='oui' ";
	}
}
else {
	$requete13="SELECT * FROM evenement where Nom_Groupe='Public' AND validation='oui' ";
	
}

$res13=mysql_query($requete13);

// $count = mysql_num_rows($res13);
// echo $count;
// echo "<select name='Nom_Evenement'>";

while($Tuple=mysql_fetch_array($res13))
{
	?>
<fieldset>
<?php

	echo " <br/>";
	echo $Tuple['Nom_Evenement'];
	
	echo"<br/>";
	if($Tuple['Categorie_Evenement']=='Anniversaire')
	{echo "<img src='Anniversaire.jpg' alt='poulpe' class='img-rounded'>";}
	
	if($Tuple['Categorie_Evenement']=='Concert')
	{echo "<img src='concert.jpg' alt='poulpe' class='img-rounded'>";}

if($Tuple['Categorie_Evenement']=='Cocktail')
	{echo "<img src='cocktail.jpg' alt='poulpe' class='img-rounded'>";}

if($Tuple['Categorie_Evenement']=='Enterrement de vie de J-F et J-H')
	{echo "<img src='Anniversaire'.jpg' alt='poulpe' class='img-rounded'>";}

if($Tuple['Categorie_Evenement']=='Exposition')
	{echo "<img src='exposition.jpg' alt='poulpe' class='img-rounded'>";}

if($Tuple['Categorie_Evenement']=='Mariage')
	{echo "<img src='mariage.jpg' alt='poulpe' class='img-rounded'>";}

if($Tuple['Categorie_Evenement']=='Réception')
	{echo "<img src='reception.jpg' alt='poulpe' class='img-rounded'>";}


if($Tuple['Categorie_Evenement']=='Sortie culturelle')
	{echo "<img src='Sortie culturelle.jpg' alt='poulpe' class='img-rounded'>";}

if($Tuple['Categorie_Evenement']=='Soirée étudiante')
	{echo "<img src='soiree etudiante.jpg' alt='poulpe' class='img-rounded'>";}

if($Tuple['Categorie_Evenement']=='spectacle')
	{echo "<img src='spectacle.jpg' alt='poulpe' class='img-rounded'>";}

if($Tuple['Categorie_Evenement']=='conference')
	{echo "<img src='conference.jpg' alt='poulpe' class='img-rounded'>";}

if($Tuple['Categorie_Evenement']=='Congrès')
	{echo "<img src='congres.jpg' alt='poulpe' class='img-rounded'>";}

if($Tuple['Categorie_Evenement']=='Formation')
	{echo "<img src='formation.jpg' alt='poulpe' class='img-rounded'>";}

if($Tuple['Categorie_Evenement']=='Fête')
	{echo "<img src='fete.jpg' alt='poulpe' class='img-rounded'>";}


	echo $Tuple['Description_Evenement'];
	echo"<br/>";

	echo "_____________________________________________________________________________";
	
	 if(isset($_SESSION['AdresseMail_Utilisateur'])) 
	 {
 ?>
<form method='post' name="button2" action='participe.php'>
				  <input type="hidden" name="recherche" value="2">
				  <input type="hidden" name="idevenement" value="<?php		echo $Tuple['Id_Evenement'];	?>">
			<input class="btn btn-lg btn-primary"  name="button2" id="button2" type="submit" value="Participer à l'évènement"> </button></form> 
 </fieldset>
 <?php
	 }
}
 ?>
</div>
</body>
</html>