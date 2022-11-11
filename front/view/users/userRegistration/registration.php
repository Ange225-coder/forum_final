<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title>Inscrivez-vous</title>
        <link>
    </head>

    <body>
        <form method="POST" action="../../../../back/router/rout.php?action=newUserInsertionCtrl">

            <h1>Inscrivez-vous</h1>

            <div>
                <label for="pseudo">Pseudonyme</label><br>
                <input type="text" name="pseudo" id="pseudo" required>
            </div>

            <div>
                <label for="email">Email</label><br >
                <input type="email" name="email" id="email" required>
            </div>

            <div>
                <label for="pass">Mot de passe</label><br >
                <input type="password" name="pass" id="pass" required>
            </div>

            <div>
                <label for="confirm_pass">Confirmer le mot de passe</label><br>
                <input type="password" name="confirm_pass" id="confirm_pass" required>
            </div>

            <button type="submit">S'inscrire</button>
        </form>
    </body>
</html>



