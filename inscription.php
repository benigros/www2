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

        
    <label for="Prenom">Prénom</label> : <input type="text" name="Prenom" id="Prenom" value="Benoit" required/><br/><br/>
    <label for="Nom">Nom</label> : <input type="text" name="Nom" id="Nom" value="Devilliers" required/><br/><br/>
    <label for="newmdp">Date de naissance</label> : <input type="date" name="date" id="date" value="1994-01-25" required/><br/><br/>
    
        </fieldset>

    <fieldset>
        <legend>Informations complémentaires       </legend>
    <label for="adresse">Adresse électronique</label> : <input type="email" name="adresse" id="adresse" value="toto@xxx.fr" required/><br/><br/>
    
    <label for="mdp">Nouveau mot de passe</label> : <input type="password" name="mdp" id="mdp" value="mdp" required/><br/><br/>
    <label for="newmdp">Confirmer le mot de passe</label> : <input type="password" name="confmdp" id="confmdp" value="mdp" required/><br/><br/>
    
    </fieldset>
    <input type="submit" value="Inscription" />
    
    
     
          
     
</form>
</div>

    </body>
</html>
