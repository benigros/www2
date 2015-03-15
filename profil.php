
<html>
    <head>
        <meta charset="UTF-8">
          <link href="css/bootstrap.min.css" rel="stylesheet">
		  <link href="css/mycss.css" rel="stylesheet">
        <title></title>
		
	
	
	
 <div class="row">
  <div class="col-lg-2" >
  
  <?php echo $_SESSION['Prenom_Utilisateur'];
  echo "  ";
  echo $_SESSION['Nom_Utilisateur'];
  ?></div>

    </div>

		<div class="row">
		
  <div class="col-lg-2" ><a href="mesgroupes.php">
Mes groupes </a> </div>
 </div>
  
 <div class="row">
  <div class="col-lg-2" ><a href="inviterevent.php">Inviter des personnes à mes évènements </a>
 </div>
  </div>

<div class="row">
  <div class="col-lg-2" >
<a href="mesevenements.php">Mes évènements  </a></div>
  </div>

  
  <div class="row">
  <div class="col-lg-2" >
<a href="">Modifier mon mot de passe </a> </div>
  </div>
</html>