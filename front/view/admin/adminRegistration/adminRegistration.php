<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title>Administration</title>
    </head>
    <body>

        <h2>Enregistrez-vous en tant qu'un administrateur du site</h2>

        <form method="POST" action="../../../../back/router/rout.php?action=adminRegistrationCtrl">

            <div>
                <label for="username">username</label><br >
                <input type="text" name="username" id="username" required>
            </div>

            <div>
                <label for="admin_password">Mot de pass</label><br >
                <input type="password" name="admin_password" id="admin_password" required>
            </div>

            <button type="submit">Enregistrement</button>
        </form>
    </body>
</html>

