<?php session_start();

    require_once('../../../../../back/controllers/administratorManageCtrl/deletionCtrl/gettingCtrl/getUsersIdCtrl.php');

    $get_id = getUserIdCtrl();
    $title = 'Supprimer '.$get_id['pseudo'];
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title><?= $title; ?></title>
    </head>

    <body>

        <div>
            <?php include_once('../../adminDetails/adminDetails.php'); ?>
        </div>

        <div>
            <p>
                <strong>Identifiant : </strong> <?= $get_id['id']; ?>
            </p>

            <p>
                <strong>Pseudonyme : </strong> <?= $get_id['pseudo']; ?>
            </p>

            <p>
                <strong>Email : </strong> <?= $get_id['email']; ?>
            </p>
        </div>


        <h2>Supprimer cet utilisateur : cette action sera irreversible !</h2>

        <form method="POST" action="../../../../../back/router/rout.php?action=deleteUserCtrl&amp;id=<?= $get_id['id']; ?>">
            <div>
                <label for="delete">Mot de passe administrateur : </label> <input type="password" name="delete" id="delete" required>
            </div>

            <button type="submit">Suppression</button>
        </form>
    </body>
</html>