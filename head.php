<?php	
session_start();
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
			 
			 			<?php
	if(isset($_SESSION['AdresseMail_Utilisateur']))
	{?>
			 
                <li ><a href="Creerevent.php">Créer un évènement</a></li>
				
                <li><a href="RechercheEvent.php">Rechercher un évènement</a></li>
				
                <li><a href="Creergroupe.php">Créer un groupe</a></li>
			
                <li><a href="RechercheGroupe.php">Rechercher un groupe</a></li>
				<li><div class="col-lg-2"></div></li>
				<li>
	

      Connecté en tant que <?php  echo $_SESSION['Prenom_Utilisateur']." ".$_SESSION['Nom_Utilisateur'] ;?>
	
	</li>
	<li><div class="col-lg-2"></div></li>
	<li>
	  <form method='post' action='deconnexion.php'>
	  <input type="submit" value="Déconnexion" />
	
	  </form>


	<?php
	}
	else{
		?>
		
		<li >_________________________</li>
				
<li >_________________________</li>
				
                <li >_________________________</li>
			
                <li >_________________________</li>
				<li><div class="col-lg-2"></div></li>
				<li>

		  
		
       <form method='post' action='Connexion.php'>
	  <input type="submit" value="Connexion" />
	  </form>
	  </li>
	  <li><div class="col-lg-2"></div></li>
	<li>
 

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
		   <?php if(isset($_SESSION['AdresseMail_Utilisateur']))
  { ?>
            <li class="active"><?php echo $_SESSION['Prenom_Utilisateur'];
  echo "  ";
  echo $_SESSION['Nom_Utilisateur'];
  ?>
			</li><li>
			<a href="mesgroupes.php">
			Mes groupes </a> <span class="sr-only">(current)</span></a></li>
			  <li><a href="invitergroupe.php">Inviter des personnes à mes groupes </a></li>
            
			 
            <li><a href="mesevenements.php">Mes évènements  </a></li>
			<li><a href="inviterevent.php">Inviter des personnes à mes évènements </a></li>
			  <li> <a href="changepass.php">Modifier mon mot de passe </a> </li>
			 
			
           
          </ul>

        </div>
	
  <?php } 
  else { ?> </ul></div>
  <?php }
  ?> 
  
  
        <br/>
             
      
		   
		 
		  
		   <br/>
		   <br/>
		  
		  
		  
		   
</html>