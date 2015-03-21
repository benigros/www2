<?php session_start();
include("identifiants.php");

echo var_dump($_POST);
echo var_dump($_SESSION);
echo $_SESSION['AdresseMail_Utilisateur'];
$r1="select * from utilisateur where AdresseMail_Utilisateur='".$_SESSION['AdresseMail_Utilisateur']."'";
$res1= mysql_query($r1);
echo $res1;
echo $r1;
//$Tuple = mysql_query($res1);
echo "3333";
echo $res1['Motdepasse'];


if($_POST['Mdp']==$res1['Motdepasse'])
{echo "1";
}

// $Tuple=mysql_fetch_array($res1);
// echo $Tuple['Motdepasse'];

?>