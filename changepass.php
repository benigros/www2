<?php
include("head.php");
include("identifiants.php");

echo var_dump($_POST);
echo var_dump($_SESSION);
?>

<body>
 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
 
 <form method='post' action='pass.php'>
 
 <label for="Mdp">Mot de passe actuel :</label> 
 <input type="text" name="Mdp" id="Mdp" value="" required/><br/><br/>
 
 
  <label for="Mdp">Nouveau mot de passe</label> : <input type="password" name="newmdp" id="newmdp" value="" required/><br/><br/>
    <label for="newmdp">Confirmer le mot de passe</label> : <input type="password" name="confmdp" id="confmdp" value="" required/><br/><br/>
    
  
    <input type="submit" value="Inscription" />
    
 </form>