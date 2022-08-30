
<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8mb4', 'etudiant','Blessing1999');
}catch(Exception $e)
{
  die('Erreur' .$e->getMessage());
}
?>