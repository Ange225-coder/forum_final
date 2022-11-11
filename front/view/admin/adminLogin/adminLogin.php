<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title>Administration | Connexion</title>
    </head>
    <body>

        <h2>Connectez-vous en tant qu'administrateur du site</h2>

        <form method="POST" action="../../../../back/router/rout.php?action=adminLoginCtrl">

            <?php if(isset($error_login_admin)): ?>
                <?= $error_login_admin; ?>
            <?php endif; ?>

            <div>
                <label for="username">username</label><br >
                <input type="text" name="username" id="username" required>
            </div>

            <div>
                <label for="password">Mot de pass</label><br >
                <input type="password" name="password" id="password"  required>
            </div>

            <button type="submit">Connection</button>
        </form>
    </body>
</html>
