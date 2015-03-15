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

<label for="Invitation_Groupe">Inviter dans le groupe :</label>
	<select name="Invitation_Groupe">
	
	
<?php   $r1 = 'SELECT * FROM utilisateur';
		$res1=mysql_query($r1);
		echo $res1;
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
   

   
    
    
            </fieldset>


<input type="submit" value="Publier" />
</div>
    
    
    </form>
    </body>
	
	<?php include("foot.php") ;?>
</html>
