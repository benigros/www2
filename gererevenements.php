<?php
include("headgestion.php");
?>


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">



	<h2 class="sub-header">Evenements en attente:</h2>
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
			   
			  
	
	
	<?php //$r1 = "select distinct Id_Evenement from evenement,participe where evenement.Id_Evenement = participe.Id_Evenement AND statut='att' ";
		// $r1 = 'SELECT distinct Id_Evenement FROM participe where  statut = "att";
		 $r1 = "select  * from evenement where validation='non'";
		echo $r1;
		$res1=mysql_query($r1);
		echo '<br/>';
		echo '<br/>';
		while($Tuple=mysql_fetch_array($res1))
		
		{
			
			 // $nom= 'select  * from evenement where Id_Evenement="'.$Tuple['Id_Evenement'].'"';
			 // $rnom=mysql_query($nom);
			 // $Tuple2=mysql_fetch_array($rnom);
			
			
	?>

	<tr>			
					
                  <td><?php		echo $Tuple['Nom_Evenement'];
echo $Tuple['Id_Evenement'];				  ?></td>
                 <td></td>
                  <td></td><td></td><td></td><td></td><td></td>
                  <td><form method='post' name="button1" action='participe.php'>
				  <input type="hidden" name="idevenement" value="<?php	echo $Tuple['Id_Evenement'];		?>">
				    <input type="hidden" name="createur" value="<?php		echo $Tuple['AdresseMail_Utilisateur'];	?>">
				  <input class="btn btn-lg btn-primary"  name="button2" id="button2" type="submit" value="Valider"> </button></form></td>
				  
				  <td><form method='post' name="button1" action='quitterevenement.php'>
				  <input type="hidden" name="idevenement" value="<?php		echo $Tuple['Id_Evenement'];	?>">
				  <input type="hidden" name="createur" value="<?php		echo $Tuple['AdresseMail_Utilisateur'];	?>">
				  <input class="btn btn-lg btn-primary"  name="button1" id="button1" type="submit" value="Supprimer"> </button></form></td>
                </tr>
		
	
		<?php } ?>
		
		              </tbody>
            </table>
          </div>



<h2 class="sub-header">Evènements:</h2>
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
	
	
	 
 <?php //$r2 = "SELECT distinct Id_Evenement FROM participe where statut != 'att'";
		// $res2=mysql_query($r2);
		
	 $r2 = "select  * from evenement where validation='oui'";
		
		$res2=mysql_query($r2);
		echo '<br/>';
		echo '<br/>';
		while($Tuple2=mysql_fetch_array($res2))
		{
		// while($Tuple3=mysql_fetch_array($res2))
		
		// {
			 // $nom2= 'select  * from evenement where Id_Evenement="'.$Tuple3['Id_Evenement'].'"';
			 // $rnom2=mysql_query($nom2);
			 // $Tuple4=mysql_fetch_array($rnom2);
	?>

	<tr>			
					
                  <td><?php		echo $Tuple2['Nom_Evenement'];	?></td>
                 <td></td>
                  <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                  <td><form method='post' name="button1" action='quitterevenement.php'>
				  <input type="hidden" name="nomevenement" value="<?php		echo $Tuple2['Nom_Evenement'];	?>">
				  <input class="btn btn-lg btn-primary"  name="button1" id="button1" type="submit" value="Supprimer l'évènement"> </button></form></td>
                </tr>
		
	
		<?php }
		
		?>
		
		              </tbody>
            </table>
          </div>

	
	<?php include("foot.php") ;?>
	       </div>
	</html>