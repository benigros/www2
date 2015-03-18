<?php
include("head.php");
include("identifiants.php");
?>
<div class="row">
	<div class="col-lg-3"></div>
	
	
        <h1> Recherche de groupe</h1>
       
	 <form method="post" action="traitementRecherchegroupe.php">
	   
          <fieldset>
		  
		  
		  <label for="Nom_groupe">Nom du groupe</label>: <input type="text" name="Nom_Groupe" id="Nom_Groupe" value="" /><br/><br/> 
         
	
	
	
	
          
    <input type="submit" value="Lancer la recherche" />
	</form>
	
	
	 
	</div>
	   
	 <?php if(isset($_SESSION['Nom_Groupe'] ))
	 { 

		
		if($_SESSION['Nom_Groupe']!= "0")
			{ 
	
			$requete13= "SELECT Nom_Groupe,Description_Groupe FROM groupe WHERE Nom_Groupe= '".$_SESSION['Nom_Groupe']."'";
			}
 
		else{
		$requete13="SELECT Nom_Groupe,Description_Groupe FROM groupe";
		}
		
		$res13=mysql_query($requete13);
		
?>
<h2 class="sub-header">Groupes:</h2>
          <div class="table-responsive">
            <table class="table table-striped">
<thead>
                <tr>
               
                  <th>Nom</th>
                   <th></th>
				    <th>Description</th>
					 <th></th><th></th><th></th><th></th><th></th> 
                  <th></th>
				  <th></th>
                </tr>
              </thead>
			  
			   <?php 
		while($Tuple=mysql_fetch_array($res13))
		{
			
			?>
			 <tbody>
			<tr>			
					
                  <td><?php		echo $Tuple['Nom_Groupe'];	?></td>
                 <td><?php echo $Tuple['Description_Groupe']; ?> </td>
                  <td><form method='post' name="button2" action='rejoindregroupe.php'>
				  <input type="hidden" name="recherche" value="2">
				  <input type="hidden" name="nomgroupe" value="<?php		echo $Tuple['Nom_Groupe'];	?>">
				  <input class="btn btn-lg btn-primary"  name="button2" id="button2" type="submit" value="Rejoindre"></form></td>
                </tr>
		
	
		
		
		             
          </div>
			
	 <?php }} ?>
 </tbody>
            </table>
 
 
	
	
	 

	

        
    </body>
	
	<?php include("foot.php") ;?>
</html>