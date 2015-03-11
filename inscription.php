<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include("head.php");
?>
           </header>
        <div class="col-lg-3"></div>
	<div class="col-lg-8">
        <h1>Inscription</h1>

<form method="post" action="traitementinsc.php">
   
    <fieldset>
        <legend>Informations de base        </legend>

    <label for="Nom_Utilisateur">Nom</label> : <input type="text" name="Nom_Utilisateur" id="Nom_Utilisateur" value="Moscet" required/><br/><br/>  
    <label for="Prenom_Utilisateur">Prénom</label> : <input type="text" name="Prenom_Utilisateur" id="Prenom_Utilisateur" value="Carl" required/><br/><br/>
	
	
	<label for="Sexe">Sexe :</label>
	<select name="Sexe">

	
		<option value="H">Homme</option>

    <option value="F">Femme</option>
	</select>
	<br/>
	<br/>
    
    <label for="Date_de_Naissance">Date de naissance</label> : <input type="date" name="Date_de_Naissance" id="Date_de_Naissance" value="1994-01-25" required/><br/><br/>
    <label for="Adresse_Utilisateur">Adresse </label> : <input type="text" name="Adresse_Utilisateur" id="Adresse_Utilisateur" value="sur le trotoir" required/><br/><br/>
	<label for="CodePostal_Utilisateur">Code postal</label> : <input type="text" name="CodePostal_Utilisateur" id="CodePostal_Utilisateur" value="29200" required/><br/><br/>  
	<label for="Ville_Utilisateur">Ville</label> : <input type="text" name="Ville_Utilisateur" id="Ville_Utilisateur" value="Brest" required/><br/><br/> 

	
        </fieldset>

    <fieldset>
        <legend>Informations complémentaires       </legend>
		
		
    <label for="AdresseMail_Utilisateur">Adresse électronique</label> : <input type="email" name="AdresseMail_Utilisateur" id="AdresseMail_Utilisateur" value="coco@xxx.fr" required/><br/><br/>
    
    <label for="Mdp">Nouveau mot de passe</label> : <input type="password" name="Mdp" id="Mdp" value="tralala" required/><br/><br/>
    <label for="newmdp">Confirmer le mot de passe</label> : <input type="password" name="confmdp" id="confmdp" value="tralala" required/><br/><br/>
    
    </fieldset>
    <input type="submit" value="Inscription" />
    
    
     
          
     
</form>
</div>

    </body>
</html>
