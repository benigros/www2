

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="css/mycss.css" />
        <title></title>
    </head>
    <body>
           <div id="start">
       <a href="http://localhost/accueil.php">Déconnexion</a></li>
   <a href="http://localhost/inscription.php">Inscription</a>
</div>
        <br/>
             
           <header id='header'>
       <nav id="nav">
  <a href="http://localhost/Accueil.php">Accueil</a>
   <a href="http://localhost/Creerevent.php">Créer un évènement</a>
   <a href="http://localhost/Creergroupe.php">Créer un groupe</a>
   <a href="http://localhost/RechercheEvent.php">Rechercher un évènement</a>
 <a href="http://localhost/RechercheGroupe.php">Rechercher un groupe</a>
<a href="http://localhost/Profil.php">Mon profil</a>
</nav>
           </header>
        <h1> Recherche d'évènement</h1>
        
          <fieldset>
          <label for="TypeEvent">Type d'évènement :</label>
    <select name="TypeEvent">

    <option value="Anniversaire">Anniversaire</option>

    <option value="Cocktail">Cocktail</option>

    <option value="concert">Concert</option>

    <option value="Enterrement de vie de J-F et J-H">Enterrement de vie de J-F et J-H</option>
    
    <option value="exposition">Exposition</option>
    
    <option value="mariage">Mariage</option>
    
     <option value="reception">Réception</option>
     
      <option value="sortie culturelle">Sortie culturelle</option>
       <option value="soiree etudiante">Soirée étudiante</option>
        <option value="spectacle">spectacle</option>
         <option value="conference">conference</option>
          <option value="congres">Congrès</option>
           <option value="formation">Formation</option>
            <option value="fete">Fête</option>
    
    
    </select> <br/><br/>
    
    <label for="datevent">Date à partir de laquelle vous souhaitez rechercher l'évenement </label> : <input type="date" name="datevent" id="date" value="" required/><br/><br/>
    
    </select>
              </fieldset>
          
    <input type="submit" value="Lancer la recherche" />

        <?php
        // put your code here
        ?>
    </body>
</html>
