<?php

include("head.php");
include("identifiants.php");


?>


<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-8">
	
	
	
	
	<h2>Invitation(s) à un évènement:</h2>

	<h2 class="sub-header">Evènements auquels je participe :</h2>
          <div class="table-responsive">
            <table class="table table-striped">
<thead>
                <tr>
               
                  <th>Id</th>
                  <th>Nom</th>
                  <th>Date</th>
                  <th>Type</th>
				  <th></th>
                </tr>
              </thead>
			   <tbody>
	
	<?php $r1 = 'SELECT * FROM evenement';
		$res1=mysql_query($r1);
		echo '<br/>';
		echo '<br/>';
		while($Tuple=mysql_fetch_array($res1))
		{
	?>

	<tr>			
					<td><?php		echo $Tuple['Id_Evenement'];?></td>
                  <td><?php		echo $Tuple['Nom_Evenement'];	?></td>
                  <td><?php		echo $Tuple['Date_Evenement'];?></td>
                  <td><?php		echo $Tuple['Categorie_Evenement'];?></td>
                  
                  <td></td>
                </tr>
		
	
		<?php } ?>
		
		              </tbody>
            </table>
          </div>

	<br/>

	
	<?php include("foot.php") ;?>
</html>