

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include("head.php");
?>
<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-8">
        <h1> Recherche d'évènement</h1>
        
          <fieldset>
          <label for="TypeEvent">Type d'évènement :</label>
	
	
	<form method="post" action="traitementcreerevent.php">
	
		<select name="TypeEvent">

	
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
    
    <label for="datevent">Date à partir de laquelle vous souhaitez rechercher l'évenement </label> : <input type="date" name="datevent" id="date" value="" required/><br/><br/>
    
    </select>
              </fieldset>
          
    <input type="submit" value="Lancer la recherche" />
	</form>
	</div>
	

        
    </body>
	
	<?php include("foot.php") ;?>
</html>
