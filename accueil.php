<html>

<?php
include("head.php");
include("identifiants.php");
?>
<body>
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
	AND Date_Evenement >= '".$_SESSION['Date_Evenement']."' ";
	}
	if ($_SESSION['accueil']==2)
	{
	$requete13="SELECT * FROM evenement WHERE Nom_Evenement = '".$_SESSION['Nom_Evenement']."'
	AND Date_Evenement >= '".$_SESSION['Date_Evenement']."' ";
	}
	if ($_SESSION['accueil']==3)
	{
	$requete13="SELECT * FROM evenement WHERE Categorie_Evenement = '".$_SESSION['Categorie_Evenement']."'
	AND Date_Evenement >= '".$_SESSION['Date_Evenement']."' ";
	
	}
	if ($_SESSION['accueil']==4)
	{
	$requete13="SELECT * FROM evenement WHERE Date_Evenement >= '".$_SESSION['Date_Evenement']."'";
	}
}
else {
	$requete13="SELECT * FROM evenement";
}

$res13=mysql_query($requete13);
// echo "<select name='Nom_Evenement'>";

while($Tuple=mysql_fetch_array($res13))
{
	?>
<fieldset>
<?php

	echo " <br/>";
	echo $Tuple['Nom_Evenement'];
	
	echo"<br/>";
	
	echo "<img src='poulpe.jpg' alt='poulpe' class='img-rounded'>";

	echo $Tuple['Description_Evenement'];
	echo"<br/>";
	echo "_____________________________________________________________________________";
 ?>
 </fieldset>
 <?php
}
 ?>

</body>
</html>