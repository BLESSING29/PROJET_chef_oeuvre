
<?php

  try 
  {
      $bdd = new PDO("mysql:host=ftp-e-learningmanasse.alwaysdata.net;dbname=e-learning_wise;charset=utf8",'e-learningmanasse', 'Blessing1999@');
  }
  catch(PDOException $e)
  {
      die('Erreur : '.$e->getMessage());
  }