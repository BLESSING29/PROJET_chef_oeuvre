<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/madnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootsrapcdn.bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
             <h1> Inscription</h1>
        <?php
        if(isset($_GET['reg_err']))
        {
            $err = htmlspecialchars($_GET['reg_err']);

            switch($err)
            {
                case 'success':
                    ?>
                    <!-- <div class="alert alert-success"> -->
                         <strong>succès</strong> inscription réussie !
                    <!-- </div> -->
                    <?php
                break;

                case 'password':
                    ?>
                    <!-- <div class="alert alert-danger"> -->
                         <strong>Erreur</strong> mot de passe différent 
                    <!-- </div> -->
                    <?php
                break;

                case 'email':
                    ?>
                    <!-- <div class="alert alert-danger"> -->
                         <strong>Erreur</strong> email non validé
                    <!-- </div> -->
                    <?php
                break;

                case 'email_length':
                    ?>
                    <!-- <div class="alert alert-danger"> -->
                         <strong>Erreur</strong> email trop long
                    <!-- </div> -->
                    <?php
                break;

                case 'username_lenght':
                    ?>
                    <!-- <div class="alert alert-danger"> -->
                         <strong>Erreur</strong> nom trop long 
                    <!-- </div> -->
                    <?php
                break;

                case 'firstname_length':
                    ?>
                    <!-- <div class="alert alert-danger"> -->
                         <strong>Erreur</strong> prénom trop long
                    <!-- </div> -->
                    <?php
                break;

                 case 'already':
                    ?>
                    <!-- <div class="alert alert-danger"> -->
                         <strong>Erreur</strong> compte deja existant
                    <!-- </div> -->
                    <?php
                break;
            }
        }
        ?>
             
<form method="post" action="commencer.php">
        <p>Votre Nom:</p>
        <input type="text" name="username" placeholder="Entrez votre nom" required="required" autocomplete="off">
        <p>Votre Prénom:</p>
        <input type="text" name="firstname" placeholder="Entrez votre prénom" required="required" autocomplete="off">
        <p>Votre email:</p>
        <input type="email" name="email" placeholder="Entrez votre email" required="required" autocomplete="off">
        <p>Votre mot de passe:</p>
        <input type="password" name="password" placeholder="Entrez votre mot de passe" required="required" autocomplete="off">
        <p>Confirmez votre mot de passe:</p>
        <input type="password" name="password_retape" placeholder="Entrez votre mot de passe" required="required" autocomplete="off"> 
        <p> le choix du type de cours a suivre:</p>
        <select name="langue" id="">
            <option value="anglais">anglais</option>
            <option value="français">français</option>
        </select><br/><br/>
        <button type="submit"> S'inscrire </button>
    </form>
</body>
</html>