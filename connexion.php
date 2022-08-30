<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <img src="" alt="logo">
        <ul>
          <li><a href="index.html">Plate-forme</a></li>
          <li><a href="cours.html">Cours</a></li>
          <li><a href="tarif.html">Tarifs</a></li>
          <li><a href="commencer.html">Commencer</a></li>
          <li><a href="connexion.html">Connexion</a></li>
        </ul>
      </nav>

      <?php
    session_start();
    require_once 'config.php';

      if(isset($_POST['email']) && isset($_POST['password'])) 

     {
     $email = htmlspecialchars($_POST['email']);
     $password = htmlspecialchars($_POST['password']);

     $check = $bdd->prepare('SELECT username, firstname, email, langue,password FROM utilisateurs WHERE email = ?');
     $check->execute(array($email));
     $data = $check->fetch();
     $row = $check->rowCount();

     if($row == 1)
     {
       if(filter_var($email, FILTER_VALIDATE_EMAIL))
       {
         $password = hash('sha256', $password);
         
         if($data['password'] === $password)
         {
             $_SESSION['username'] = $data['username'];
             $_SESSION['firstname'] = $data['firstname'];
             header('Location:index.php');

         }else header('Location:index.php?login_err=password');

       }else header('Location:index.php?login_err=email');

     }else header('Location:index.php?login_err=already');
     }else header('Location:index.php');

      ?>
</body>
</html>