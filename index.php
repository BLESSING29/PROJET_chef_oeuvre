<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
            <title>Connexion</title>
        </head>
        <body>
        <nav>
        <img src="image/logoschool.png" alt="logo">
        <ul>
          <li><a href="premier.html">Plate-forme</a></li>
          <li><a href="cours.html">Cours</a></li>
          <li><a href="tarif.html">Tarifs</a></li>
          <li><a href="inscription.php">Inscription</a></li>
          <li><a href="index.php">Connexion</a></li>
        </ul>
      </nav> 
        
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
                <h2 class="text-center">Connexion</h2>       
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>   
            </form>
            <p class="text-center"><a href="inscription.php">Inscription</a></p> <br>
            <p class="text-center"><a href="oublie.php">mot de passe oublié?</a></p>
        </div>
        <style>
            .login-form {
                width: 340px;
                margin: 50px auto;
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }
        </style>
         </section>
  <section class="after-footer">
    <div class="after-footer-one">
      <div class="one">
        <i class="fa-brands fa-instagram" id="icone"></i>
        <h3>blessingatchrimi_99</h3>
      </div>
      <div class="one">
      <i class="fa-brands fa-linkedin" id="icone"></i>
        <a href="https://www.linkedin.com/in/blessing-%C3%A9ss%C3%A9nam-atchrimi-46294a238/"><h3>blessing Essenam ATCHRIMI</h3></a>
      </div>
        <div class="one" >
            <i class="fa-solid fa-phone" id="icone"></i> 
        <h3>+228 90988764  +22893744966</h3>
      </div> 
    </div>
    <div class="after-footer-two">
      <div class="two">
        <i class="fa-brands fa-facebook" id="icone"></i>
      <a href="https://m.facebook.com/?paipv=0&eav=AfaGp96VHA9b0m82qX5-hcP8wYljAa9kwIYMc5qz76weO8o3KZ_uxHlhXeD8TxTyn8U&_rdr&tbua=1"><h3>Blessing Atchrimi</h3></a>
      
        
      </div>
      <div class="two">
      <i class="fa-brands fa-twitter" id="icone"></i>
      <h3> Blessing ATCHRIMI</h3>
    </div>
      <div class="two">
        <i class="fa-solid fa-envelope" id="icone"></i>
        <h3> Blessing ATCHRIMI</h3>
      </div>
    </div>
  </section>
        </body>
</html>