<?php
include("headgestion.php");
?>



<h2 class="sub-header">Utilisateurs:</h2>
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
	
	<?php $r1 = "SELECT * FROM Utilisateur where AdresseMail_Utilisateur != 'god@gmail.com'";
		$res1=mysql_query($r1);
		echo '<br/>';
		echo '<br/>';
		while($Tuple=mysql_fetch_array($res1))
		
		{
	?>

	<tr>			
					
                  <td><?php		echo $Tuple['Nom_Utilisateur'];	?></td>
                 <td></td>
                  <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                  <td><form method='post' name="button1" action='supprimerutilisateurs.php'>
				  <input type="hidden" name="nomutilisateur" value="<?php		echo $Tuple['Nom_Utilisateur'];	?>">
				  <input type="hidden" name="adresseutilisateur" value="<?php		echo $Tuple['AdresseMail_Utilisateur'];	?>">
				  <input class="btn btn-lg btn-primary"  name="button1" id="button1" type="submit" value="Supprimer l'utilisateur"> </button></form></td>
                </tr>
		
	
		<?php } ?>
		
		              </tbody>
            </table>
          </div>

	
	<?php include("foot.php") ;?>
	
	</html>