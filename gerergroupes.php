<?php
include("headgestion.php");
?>


 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
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
                  <td><form method='post' name="button1" action='quittergroupe.php'>
				  <input type="hidden" name="nomgroupe" value="<?php		echo $Tuple['Nom_Groupe'];	?>">
				  <input class="btn btn-lg btn-primary"  name="button1" id="button1" type="submit" value="Supprimer le groupe"> </button></form></td>
                </tr>
		
	
		<?php } ?>
		
		              </tbody>
            </table>
          </div>

	
	<?php include("foot.php") ;?>
	</div>
	</html>