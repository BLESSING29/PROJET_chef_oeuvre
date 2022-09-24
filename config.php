
<?php

  try 
  {
      $bdd = new PDO("mysql:host=localhost;dbname=e-learning_wise;charset=utf8",'root', 'Blessing1999@');
  }
  catch(PDOException $e)
  {
      die('Erreur : '.$e->getMessage());
  }