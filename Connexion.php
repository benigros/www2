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

<label for="AdresseMail_Utilisateur">Identifiant(adresse électronique)</label> : <input type="email" name="AdresseMail_Utilisateur" value="coco@xxx.fr" id="adresse" required/><br/><br/>
<label for="mdp">Mot de passe</label> : <input type="password" name="Mdp" id="Mdp" value="tralala" required/><br/><br/>
</fieldset>
<input type="submit" value="Connexion" />
</form>
</div>

</body>
</html>