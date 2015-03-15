<?php

include("head.php");
include("identifiants.php");


?>


<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-8">
	
	
	<label for="mes_evenements">Mes évènements :</label>
	<select name="mes_evenements">
	
	<?php $r1 = 'SELECT * FROM evenement';
		$res1=mysql_query($r1);
		while($Tuple=mysql_fetch_array($res1))
		{
	?>

		<option value="">
		<?php 
		
		{
			echo $Tuple['Nom_Evenement'];
			
		}	
		?>
		</option>	
		<?php } ?>
	</select>
	<br/>
<label for="Invitation_Evenement">Inviter à l'évènement :</label>
	<select name="Invitation_Evenement">
	
	
<?php $r1 = 'SELECT * FROM utilisateur';
		$res1=mysql_query($r1);
		while($Tuple=mysql_fetch_array($res1))
		{
	?>

		<option value="">
		<?php 
		
		{
			echo $Tuple['Prenom_Utilisateur'];
			echo '  ';
			echo $Tuple['Nom_Utilisateur'] ;
		}	
		?>
		</option>	
		<?php } ?>
		</select>
	
	<?php include("foot.php") ;?>
</html>