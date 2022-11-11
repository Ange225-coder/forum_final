<?php session_start();
    require_once('../../../../../back/controllers/administratorManageCtrl/deletionCtrl/gettingCtrl/getCommentIdCtrl.php');

    $get_comment_id = getCommentIdCtrl();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title>Supprimer un commentaire</title>
    </head>
    <body>

        <div>
            <?php include_once('../../adminDetails/adminDetails.php'); ?>
        </div>


        <div>
            <p>
                <strong>Identifiant : </strong> <?= $get_comment_id['id']; ?>
            </p>

            <p>
                <strong>Commentaires : </strong> <?= $get_comment_id['comment']; ?>
            </p>
        </div>

        <h2>Supprimer ce commentaire : cette action est irreversible !</h2>

        <?php if(isset($error)) : ?>

            <?= $error; ?>
        <?php endif; ?>

        <form method="POST" action="../../../../../back/router/rout.php?action=deleteCommentCtrl&amp;id=<?= $get_comment_id['id']; ?>">


            <label for="password">Mot de passe administrateur : </label> <input type="password" name="delete_comment" id="password" required> <br >

            <button type="submit">Suppression</button>
        </form>

    </body>
</html>