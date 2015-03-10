
<?php
$link = mysql_connect('localhost', 'root', 'root');
mysql_select_db('projetweb');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

?>

