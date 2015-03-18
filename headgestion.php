<?php	
session_start();
include("identifiants.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
          <link href="css/bootstrap.min.css" rel="stylesheet">
		  <link href="css/mycss.css" rel="stylesheet">
		  <link href="css/dashboard.css" rel="stylesheet">
		      <link href="carousel.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
            

		
				
	

	<br/><br/><br/>
	
	
	 <nav class="navbar navbar-inverse navbar-fixed-top ">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
             <li ><a href="accueil.php">Accueil</a></li>
			 
                <li ><a href="Creerevent.php">Créer un évènement</a></li>
				
                <li><a href="#RechercheEvent.php">Rechercher un évènement</a></li>
				
                <li><a href="#Creergroupe.php">Créer un groupe</a></li>
			
                <li><a href="#RechercheGroupe.php">Rechercher un groupe</a></li>
				<li>
				<?php
	if(isset($_SESSION['AdresseMail_Utilisateur']))
	{?>

      Connecté en tant que <?php  echo $_SESSION['Prenom_Utilisateur']." ".$_SESSION['Nom_Utilisateur'] ;?>
	
	
	  <form method='post' action='deconnexion.php'>
	  <input type="submit" value="Déconnexion" />
	
	  </form>


	<?php
	}
	else{
		?>
		
		
		
       <form method='post' action='Connexion.php'>
	  <input type="submit" value="Connexion" />
	  </form>
	  </div>
	
 

		<form method='post' action='inscription.php'>
	  <input type="submit" value="Inscription" />
	  </form>
	</div>
	<?php
	}
	?></li>
          </ul>
          
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="gerergroupes.php">Gérer les groupes </a> <span class="sr-only">(current)</span></a></li>
            <li><a href="gererevenements.php">Gérer les évènements </a></li>
            <li><a href="gererutilisateurs.php">Gérer les utilisateurs </a></li>
           
          </ul>

        </div>
	



	
				
			

        <br/>
             
           <header id='header'>
     
  
</div>
           </header>
		   
		 
		  
		   <br/>
		   <br/>
		   <?php 
		   if(isset($_SESSION['AdresseMail_Utilisateur']))
		   {
			   //include("admin.php");
			  }
	   ?>
		 
		  	
		   
</html>