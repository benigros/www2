<?php
include("head.php");
include("identifiants.php");
?>
<body>
<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-8">
	
        <h1> Création de groupe</h1>
        
        <form method='post' action='traitementcreergroupe.php'>
        
        <fieldset>
		
	 <label for="Nom_Groupe">Nom</label> : <input type="text" name="Nom_Groupe" id="Nom_Groupe" placeholder="Apéro à la colloc'" required/><br/><br/>
  
		
	
    
    
    </select> <br/><br/>
	
	
     
		<label for="Description_Groupe">Description du groupe :</label><br/><textarea name="Description_Groupe" id="Description_Groupe" rows="4" cols="20">
		
      

       </textarea>  
	   <br/>
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
   

   
    
    
            </fieldset>


<input type="submit" value="Publier" />
</div>
    
    
    </form>
    </body>
	
	<?php include("foot.php") ;?>
</html>
