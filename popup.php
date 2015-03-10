<html>
<head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="css/mycss.css" />
        <title></title>
    </head>

	<?php
	if(isset($_SESSION['id']))
	{?><?php session_destroy();?>
Identifiants erronés .
	<?php
	}
	else{
		?>
		
       Connexion réussie ! Bienvenue <?php echo .$_SESSION['prenom'];?>
	<?php
	}
	?>
</html>


