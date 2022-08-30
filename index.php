<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="login-form">
  <?php
       if(isset($_GET['login_err']))
       {
        $err = htmlspecialchars($_GET['login_err']);

        switch($err)
        {
          case 'password':
            ?>
            <div class="alert alert-danger">
              <strong>Erreur</strong> mot de passe incorrect
            </div>
            <?php
            break;
            
            case 'email':
              ?>
              <div class="alert alert-danger">
                <strong>Erreur</strong> email incorrect
              </div>
              <?php
              break;

              case 'already':
                ?>
                <div class="alert alert-danger">
                  <strong>Erreur</strong> compte non existant
                </div>
                <?php
                break;
        }
       }

  ?>
    <form action="connexion.php" method="post">
    
        <p>Votre email:</p>
        <input type="email" name="email" placeholder="Entrez votre email"  required="required" autocomplete="off">
        <p> Votre mot de passe:</p>
        <input type="password" name="password" placeholder="Entrez votre mot de passe"  required="required" autocomplete="off"> 
        <button type="submit">connexion</button>
        </form>
        <p><a href="inscription.php">Inscription</a></p>
    </div>
  </div> 
</body>
</html>