<?php
require_once 'config.php';
if(isset($_POST['username']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password-retype']) && isset($_POST['langue']))
{
    $username = htmlspecialchars($_POST['username']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);
    $langue = htmlspecialchars($_POST['langue']);

    $check = $bdd->prepare('SELECT username, firstname, email, langue,password FROM utilisateurs WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 0)
    {
      if(strlen($username) <=100)
     {
        if(strlen($firstname) <=100)
        {
        if(strlen($email) <=100) 
         {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                if($password == $password_retype)
                {
            $password = hash('sha256', $password);
            $ip = $_SERVER['REMOTE_ADOR'];

            $insert = $bdd->prepare('INSERT INTO utilisateurs(username, firstname, email, password, langue) VALUES(:username, :firstname, :email, password, :ip)');
            $insert->execute(array(
                   'username' => $username,
                   'firstname' => $firstname,
                   'email' => $email,
                   'password' => $password,
                   'langue' => $langue,
                   'ip' => $ip
                    ));
            header('Location:inscription.php?reg_err=success');
         }else header('Location:inscription.php?reg_err=password');
       }else header('Location:inscription.php?reg_err=email');
      }else header('Location:inscription.php?reg_err=email_lenght');
    }else header('Location:inscription.php?reg_err=firstname_lenght');
     }else header('Location:inscription.php?reg_err=username_lenght');
    }else header('Location: inscription.php?reg_err=already');

}

?>