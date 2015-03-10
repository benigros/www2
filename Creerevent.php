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
        <h1> Création d'évènement</h1>
        
        <form method='post' action=''>
        
        <fieldset>
        <label for="datevent">Date </label> : <input type="date" name="datevent" id="date" value="" required/><br/><br/>
        
    <label for="NomEvent">Nom</label> : <input type="text" name="NomEvent" id="NomEvent" placeholder="Apéro à la colloc'" required/><br/><br/>
    
    
    <label for="TypeEvent">Type d'évènement :</label>
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
    
    
    </select>
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
