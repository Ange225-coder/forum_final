<?php session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Se connecter</title>
        <link rel="stylesheet" href="../../../../public/css/userLoginStyle.css">
    </head>

    <body>

        <div class="forms">

            <header>
                <a href="../../../../index.php">
                    <img src="../../../../public/pics/logo.jpg" alt="forum-logo">
                </a>
            </header>

            <h1>Connexion</h1>

            <div class="form-logo_flex">
                <p>
                    <a href="#"  class="form-logo_flex--link_color_blue">
                        <img src="../../../../public/pics/fbk-3.png" alt="facebook">
                    </a>
                </p>

                <p>
                    <a href="#" class="form-logo_flex--link_color_grey">
                        <img src="../../../../public/pics/google-2.png" alt="google" >
                    </a>
                </p>

                <p>
                    <a href="#" class="form-logo_flex--link_color_black">
                        <img src="../../../../public/pics/apple-4.png" alt="img" >
                    </a>
                </p>
            </div>

            <p class="forms--pCenter">OU</p>

            <form method="POST" action="../../../../back/router/rout.php?action=loginUserCtrl">

                <h3>Connectez-vous avec votre adresse e-mail</h3>

                <div class="form--middle">
                    <label for="email">
                        <input type="email" name="email" id="email" placeholder="Adresse e-mail" required>
                    </label>
                </div>

                <div class="form--middle">
                    <label for="pass">
                        <input type="password" name="pass" id="pass" placeholder="Mot de passe" required>
                    </label>
                </div>

                <div class="form-btn">
                    <button type="submit">Se connecter</button>
                </div>

            </form>

            <p class="form-lastP--center">
                Vous n'avez pas encore de compte ? <a href="../userRegistration/registration.php">Inscrivez-vous gratuitement</a>
            </p>
        </div>


        <div class="description">

            <div class="description--text">
                <h3>
                    L'âge n'est pas un frein, tout est question d'attitude. Restez curieux, agile, remettez-vous en question.<br >
                    Même après 50 ans, la formation permet de réinventer sa carrière
                </h3>

                <p class="description--pMarge">
                    Claudia - Diplômé Carrer Coach, financé par Pôle emploi
                </p>
            </div>

            <p class="description--imgContainer">
                <img src="../../../../public/pics/claudia-2.png" alt="claudia" >
            </p>
        </div>
    </body>
</html>


