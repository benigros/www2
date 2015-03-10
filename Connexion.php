<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
<head>

<?php
include('identifiants.php');
include("head.php");
?>
<div class="col-lg-3"></div>
	<div class="col-lg-8">
<h1>Connexion</h1>
<form method="post" action="traitementco.php" onsubmit="window.open('popup.php','popup','width=700,height=400,left=200,top=200,scrollbars=1')">
<fieldset>
<label for="prenom">Prénom</label> : <input type="text" name="prenom" id="prenom" value="Carl" required/><br/><br/>
<label for="adresse">Identifiant(adresse électronique)</label> : <input type="email" name="adresse" value="carlito@ensc.fr" id="adresse" required/><br/><br/>
<label for="mdp">Mot de passe</label> : <input type="password" name="mdp" id="mdp" value="tralala" required/><br/><br/>
</fieldset>
<input type="submit" value="Connexion" />
</form>
</div>

</body>
</html>