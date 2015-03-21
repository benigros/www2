<?php

include("head.php");
include("identifiants.php");


?>


<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-8">
	
	
	<?php 
	

	echo $_SESSION['AdresseMail_Utilisateur'];
	?>
	 <form method='post' action='traitementinvitergroupe.php'>
	<label for="Nom_Groupe">Mes groupes :</label>
	<select name="Nom_Groupe">
	
	
	<?php 
	
	
	echo $_SESSION['AdresseMail_Utilisateur'];
	$r1 = "SELECT * FROM groupe WHERE AdresseMail_Utilisateur='".$_SESSION['AdresseMail_Utilisateur']."'";
	
		$res1=mysql_query($r1);
		
		while($Tab=mysql_fetch_array($res1))
		{
			
	?>
	<option value="<?php echo $Tab['Nom_Groupe'];?>">
		<?php 
		
		
			echo $Tab['Nom_Groupe'];
			
	
		?>
		</option>	
		<?php } ?>
	  </select> <br/><br/>

    
	<br/>
	<label for="Invitation_Groupe">Inviter dans le groupe :</label><br/>
	<select name="Invitation_Groupe[]" class="form-control" size="10" id="chaqueadresse" multiple="multiple">
	
	
<?php   $rqnom = 'SELECT Nom_Utilisateur FROM utilisateur';
		$rqprenom = 'SELECT Prenom_Utilisateur FROM utilisateur';
		$rqadresse='SELECT AdresseMail_Utilisateur FROM utilisateur';
		
		 $nom=mysql_query($rqnom);
		 $prenom=mysql_query($rqprenom);
		 $adresse=mysql_query($rqadresse);
		
		echo $nom;
		
		$nbmembre=mysql_num_rows($nom);
        $i=0;
        while ($i<$nbmembre) 
        {
            $chaquenom=mysql_result($nom, $i, 'Nom_Utilisateur');
			$chaqueprenom=mysql_result($prenom, $i, 'Prenom_Utilisateur');
			$chaqueadresse=mysql_result($adresse, $i,'AdresseMail_Utilisateur');
			
            $i++;
			 
            echo '<option name="1" value="';
            echo $chaqueadresse;
	
			
            echo'">';
            echo $chaqueprenom." ".$chaquenom;
			
			
            echo'</option>';
        }
        ?>
   
	
	

		</select>
		<input type="submit" value="Inviter" />
		</form>
	
	<?php include("foot.php") ;?>
</html>