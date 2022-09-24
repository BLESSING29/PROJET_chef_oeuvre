
<?php
$user = 'root';
$pass = '';
  try 
  {
      $bdd = new PDO("mysql:host=mysql-e-learningmanasse.alwaysdata.net;dbname=e-learningmanasse_wise;charset=utf8",'282181', 'Blessing1999@');
  }
  catch(PDOException $e)
  {
      die('Erreur : '.$e->getMessage());
  }