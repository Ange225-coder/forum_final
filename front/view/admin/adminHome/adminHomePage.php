<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title>Administration - Liste des tables</title>
    </head>

    <body>

        <div>
            <?php include_once('../adminDetails/adminDetails.php'); ?>
        </div>

        <h2>
            Bonjour <?= $_SESSION['username']; ?> et bienvenue dans l'espace Administration<br >
            Ici vous possédez les accès root.
        </h2>

        <div>
            <p>
                <a href="../adminManage/users/userSavedList.php">Liste des utilisateurs enregistrés sur le forum</a>
            </p>

            <p>
                <a href="../adminManage/topics/topicSavedList.php">Listes des sujets du forum
            </p>

            <p>
                <a href="../adminManage/comments/commentSavedList.php">Liste des commentaires enregistrés
            </p>

            <p>
                <a href="../adminManage/screens/screensSavedList.php">Liste des enregistrements des préoccupations et captures associées</a>
            </p>
        </div>
    </body>
</html>



