<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Inscription eventour</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/mycss.css" />
    </head>
    <body>
        
         <div id="start">
       <a href="http://localhost/Connexion.php">Connexion</a></li>
   <a href="http://localhost/inscription.php">Inscription</a></li>
</div>
        <br/>
             
           <header id='header'>
       <nav id="nav">
  <a href="http://localhost/Accueil.php">Accueil</a></li>
   <a href="http://localhost/Creerevent.php">Créer un évènement</a></li>
   <a href="http://localhost/RechercheEvent.php">Rechercher un évènement</a></li>
 <a href="http://localhost/RechercheGroupe.php">Rechercher un groupe</a></li>

</nav>
           </header>
        
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
    <label for="confadresse">Confirmer l'adresse</label> : <input type="email" name="confadresse" id="confadresse" value="toto@xxx.fr" required/><br/><br/>
    <label for="mdp">Nouveau mot de passe</label> : <input type="password" name="mdp" id="mdp" value="mdp" required/><br/><br/>
    <label for="newmdp">Confirmer le mot de passe</label> : <input type="password" name="confmdp" id="confmdp" value="mdp" required/><br/><br/>
    
    </fieldset>
    <input type="submit" value="Inscription" />
    
    
     
          
     
</form>

    </body>
</html>
