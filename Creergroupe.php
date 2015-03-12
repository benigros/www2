<?php
include("head.php");
?>

<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-8">
	
        <h1> Création de groupe</h1>
        
        <form method='post' action='traitementcreerevent.php'>
        
        <fieldset>
		
	 <label for="Nom_Groupe">Nom</label> : <input type="text" name="Nom_Groupe" id="Nom_Groupe" placeholder="Apéro à la colloc'" required/><br/><br/>
  
		
	
    
    
    </select> <br/><br/>
	
	
     
		<label for="Description_Groupe">Description du groupe</label>:<textarea name="Description_Groupe" id="Description_Groupe" rows="10" cols="10">
		
      

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
