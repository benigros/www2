<?php

include("head.php");
include("identifiants.php");


?>


<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-8">
	
	
	
	<h2 class="sub-header">Invitations:</h2>
          <div class="table-responsive">
            <table class="table table-striped">
<thead>
                <tr>
               
                  <th>Nom</th>
                   <th></th>
				    <th></th>
					 <th></th><th></th><th></th><th></th><th></th> 
                  <th>Action</th>
				  <th></th>
                </tr>
              </thead>
			   <tbody>
			   
			  
	
	<?php //$r1 = "select* from evenement,participe where evenement.Id_Evenement = participe.Id_Evenement AND statut='non' ";
		 $r1 = 'SELECT * FROM participe where AdresseMail_Utilisateur="'.$_SESSION['AdresseMail_Utilisateur'].'" AND statut = "non"';
		// echo $r1;
		$res1=mysql_query($r1);
		echo '<br/>';
		echo '<br/>';
		while($Tuple=mysql_fetch_array($res1))
		
		{
			
			 $nom= 'select * from evenement where Id_Evenement="'.$Tuple['Id_Evenement'].'"';
			 $rnom=mysql_query($nom);
			 $Tuple2=mysql_fetch_array($rnom);
			
			
	?>

	<tr>			
					
                  <td><?php		echo $Tuple2['Nom_Evenement'];	?></td>
                 <td></td>
                  <td></td><td></td><td></td><td></td><td></td>
                  <td><form method='post' name="button1" action='participe.php'>
				  <input type="hidden" name="nomevenement" value="<?php	echo $Tuple2['Nom_Evenement'];		?>">
				  <input class="btn btn-lg btn-primary"  name="button2" id="button2" type="submit" value="Rejoindre"> </button></form></td>
				  
				  <td><form method='post' name="button1" action='quitterevenement.php'><input type="hidden" name="nomevenement" value="<?php		echo $Tuple2['Nom_Evenement'];	?>">
				  <input class="btn btn-lg btn-primary"  name="button1" id="button1" type="submit" value="Refuser"> </button></form></td>
                </tr>
		
	
		<?php } ?>
		
		              </tbody>
            </table>
          </div>

	
		
	


	<br/>
	
	


	<h2 class="sub-header">Evènements auxquels je participe :</h2>
          <div class="table-responsive">
            <table class="table table-striped">
<thead>
                <tr>
               
                 
                  <th>Nom</th>
                  <th>Date</th>
                  <th>Type</th>
				  <th>Action</th>
                </tr>
              </thead>
			   <tbody>

	
	<?php $r1 = 'SELECT e.Id_Evenement,Nom_Evenement,Date_Evenement,Categorie_Evenement FROM evenement e,participe p 
	WHERE e.Id_Evenement=p.Id_Evenement AND p.AdresseMail_Utilisateur="'.$_SESSION['AdresseMail_Utilisateur'].'" AND statut="oui"';

		$res1=mysql_query($r1);
		echo '<br/>';
		echo '<br/>';
		while($Tuple=mysql_fetch_array($res1))
		{
	?>

	<tr>			
					
                  <td><?php		echo $Tuple['Nom_Evenement'];	?></td>
                  <td><?php		echo $Tuple['Date_Evenement'];?></td>
                  <td><?php		echo $Tuple['Categorie_Evenement'];?></td>
                  
                  <td><form method='post' name="button1" action='quitterevenement.php'>
				  <input type="hidden" name="idevenement" value="<?php		echo $Tuple['Id_Evenement'];	?>">
				  <input class="btn btn-lg btn-primary"  name="button1" id="button1" type="submit" value="Quitter l'évènement"> </button></form></td>
                </tr>
		
	
		<?php } ?>
		
		              </tbody>
            </table>
          </div>

	<br/>

	
	<?php include("foot.php") ;?>
</html>