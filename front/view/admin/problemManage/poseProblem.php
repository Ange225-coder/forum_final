<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title>Poser un problème </title>
    </head>
    <body>

        <div>
            <?php include_once('../../users/userDetails/userDetails.php'); ?>
        </div>

        <h2>Poser un problème</h2>

        <form method="POST" enctype="multipart/form-data" action="../../../../back/router/rout.php?action=setProblemCtrl">
            <div>
                <label for="language_using">Langage utilisé</label><br >
                <textarea name="language" id="language_using" rows="3" cols="40" required></textarea>
            </div>


            <div>
                <label for="description">Description courte du problème</label><br >
                <textarea name="description" id="description" rows="4" cols="60" required></textarea>
            </div>


            <div>
                <label for="screenshots">Capture(s) d'écran explicatives</label><br >
                <input type="file" name="screenshots" id="screenshots" required>
            </div>

            <button type="submit">Valider</button>
        </form>
    </body>
</html>

