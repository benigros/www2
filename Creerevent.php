<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include("head.php");
include("identifiants.php");
?>

<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-8">
	
        <h1> Création d'évènement</h1>
        
        <form method='post' action='traitementcreerevent.php'>
        
        <fieldset>
		
	 <label for="NomEvent">Nom</label> : <input type="text" name="Nom_Evenement" id="Nom_Evenement" placeholder="Apéro à la colloc'" required/><br/><br/>
  
		
	<label for="Categorie_Evenement">Type d'évènement :</label>
	<select name="Categorie_Evenement">
	
	

	
		<option value="Anniversaire">Anniversaire</option>

    <option value="Cocktail">Cocktail</option>

    <option value="concert">Concert</option>

    <option value="Enterrement de vie de J-F et J-H">Enterrement de vie de J-F et J-H</option>
    
    <option value="exposition">Exposition</option>
    
    <option value="mariage">Mariage</option>
    
     <option value="reception">Réception</option>
     
      <option value="sortie culturelle">Sortie culturelle</option>
       <option value="soiree etudiante">Soirée étudiante</option>
        <option value="spectacle">spectacle</option>
         <option value="conference">conference</option>
          <option value="congres">Congrès</option>
           <option value="formation">Formation</option>
            <option value="fete">Fête</option>
    
    
    </select> <br/><br/>
	
	<label for="Visibilite">Visibilité de l''évènement :</label>
	<select name="Visibilite">
	
	

	
		<option value="Public">Public</option>
		
		   </select> <br/><br/>

    <label for="Invitation_Evenement">Inviter à l'évènement :</label>
	<select name="Invitation_Evenement">
	
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
		
		<br/><br/>
	
	
       <label for="Date_Evenement">Date </label> : <input type="date" name="Date_Evenement" id="Date_Evenement"  required/><br/><br/>
        <br/>
		<br/>
		
		
      <label for="Description_Evenement">Description de l'évènement :</label><br/><textarea name="Description_Evenement" id="Description_Evenement" rows="4" cols="20">

       </textarea>      
   

   
    
    
            </fieldset>


<input type="submit" value="Publier" />
</div>
    
    
        <?php
        // put your code here
        ?>
    </form>
    </body>
	
	<?php include("foot.php") ;?>
</html>
