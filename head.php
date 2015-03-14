<?php	
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
          <link href="css/bootstrap.min.css" rel="stylesheet">
		  <link href="css/mycss.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
            

	<div class="row">
	
	
  <div class="col-md-8"></div>
  
  
	
 <div class="col-md-2">
	<?php
	if(isset($_SESSION['AdresseMail_Utilisateur']))
	{?>

      Connecté en tant que <?php  echo $_SESSION['Prenom_Utilisateur']." ".$_SESSION['Nom_Utilisateur'] ;?>
	</div>
	 <div class="col-md-2">
	  <form method='post' action='deconnexion.php'>
	  <input type="submit" value="Déconnexion" />
	  </div>
	  </form>


	<?php
	}
	else{
		?>
		
		
		
       <form method='post' action='Connexion.php'>
	  <input type="submit" value="Connexion" />
	  </form>
	  </div>
	 <div class="col-md-2">
 

		<form method='post' action='inscription.php'>
	  <input type="submit" value="Inscription" />
	  </form>
	</div>
	<?php
	}
	?>

        <br/>
             
           <header id='header'>
       <div class="row">
	<div class="col-lg-3"></div>
  <div class="col-lg-2" ><a href="http://localhost/Accueil.php"> Accueil</a></div>
  <div class="col-lg-2" > <a href="http://localhost/Creerevent.php">Créer un évènement</a></div>
  <div class="col-lg-2 "> <a href="http://localhost/RechercheEvent.php">Rechercher un évènement</a></div>
<div class="col-lg-2"> <a href="http://localhost/RechercheGroupe.php">Rechercher un groupe</a></div>

</div>
           </header>
		   
		 
		  
		   <br/>
		   <br/>
		   
		  
		  
		   
</html>