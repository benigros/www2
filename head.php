<?php	
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
          <link href="css/bootstrap.min.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
             <div class="row">
				<div class="col-lg-6" ></div>
				<?php


 ?>
	
	<?php
	
	if(isset($_SESSION['AdresseMail_Utilisateur']))
	{?><?php session_destroy();?>
<div class="col-lg-2" >
      Connecté en tant que <?php  echo $_SESSION['Prenom_Utilisateur']." ".$_SESSION['Nom_Utilisateur'] ;?>
	  </div>
	  <div class="col-lg-2" >
<a href="http://localhost/Connexion.php">Déconnexion</a>
		 </div>
</div>
	<?php
	}
	else{
		?>
		
		
		<div class="col-lg-3" >
       <a href="http://localhost/Connexion.php">Connexion</a></div>
		<div class="col-lg-3" >
		<a href="http://localhost/inscription.php">Inscription</a></div>
	<?php
	}
	?>
</div>
        <br/>
             
           <header id='header'>
       <div class="row">
	<div class="col-lg-2"></div>
  <div class="col-lg-2" ><a href="http://localhost/Accueil.php"> Accueil</a></div>
  <div class="col-lg-2" > <a href="http://localhost/Creerevent.php">Créer un évènement</a></div>
  <div class="col-lg-2 "> <a href="http://localhost/RechercheEvent.php">Rechercher un évènement</a></div>
<div class="col-lg-2"> <a href="http://localhost/RechercheGroupe.php">Rechercher un groupe</a></div>

</div>
           </header>
		   
		 
		  
		   <br/>
		   <br/>
		   
		  
		  
		   
</html>