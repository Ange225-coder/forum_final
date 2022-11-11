<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title>Suppression du compte</title>
    </head>
    <body>

        <div>
            <?php include_once('../../../userDetails/userDetails.php'); ?>
        </div>


        <h2>Suppression du compte : cette action est irreversible !</h2>

        <form method="POST" action="../../../../../../back/router/rout.php?action=deleteAccountCtrl&amp;id=<?= $_SESSION['id']; ?>">
            <div>
                <label for="del_account">Supprimer mon compte</label><br >
                <input type="password" name="password" id="del_account" required>
            </div>

            <button type="submit">Supprimer votre compte</button>
        </form>
    </body>
</html>