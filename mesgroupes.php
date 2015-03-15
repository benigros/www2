<?php

include("head.php");
include("identifiants.php");


?>


<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-8">
	
	


	
	<?php 
	?>

	
		
	


	<br/>
	
	<h2 class="sub-header">Groupes:</h2>
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
	
	<?php $r1 = 'SELECT * FROM groupe';
		$res1=mysql_query($r1);
		echo '<br/>';
		echo '<br/>';
		while($Tuple=mysql_fetch_array($res1))
		
		{
	?>

	<tr>			
					
                  <td><?php		echo $Tuple['Nom_Groupe'];	?></td>
                 <td></td>
                  <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                  <td><form method='post' name='button1' action='quittergroupe.php'><button class="btn btn-lg btn-primary " value="<?php echo $Tuple['Nom_Groupe'] ?>" id="button1" type="submit"> Quitter le groupe</button></form></td>
                </tr>
		
	
		<?php } ?>
		
		              </tbody>
            </table>
          </div>

	
	<?php include("foot.php") ;?>
</html>