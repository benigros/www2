
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
		
  <div class="col-lg-2" >
 </div>
 </div>
  
 <div class="row">
  <div class="col-lg-2" ><a href="gerergroupes.php">Gérer les groupes </a>
 </div>
  </div>

<div class="row">
  <div class="col-lg-2" >
<a href="gererevenements.php">Gérer les évènements </a></div>
  </div>

  
  <div class="row">
  <div class="col-lg-2" >
<a href="gererutilisateurs.php">Gérer les utilisateurs </a> </div>
  </div>
</html>