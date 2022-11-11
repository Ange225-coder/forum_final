<?php session_start();
    require_once('../../../../../back/controllers/administratorManageCtrl/deletionCtrl/gettingCtrl/getTopicsIdCtrl.php');

    $get_topic_id = getTopicIdCtrl();
    $title = 'Supprimer '.$get_topic_id['topic'];
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
                <strong>Identifiant : </strong> <?= $get_topic_id['id']; ?>
            </p>

            <p>
                <strong>Thème : </strong> <?= $get_topic_id['topic']; ?>
            </p>
        </div>

        <h2>Supprimer ce thème : cette action sera irreversible !</h2>

        <form method="POST" action="../../../../../back/router/rout.php?action=deleteTopicCtrl&amp;id=<?= $get_topic_id['id']; ?>">
            <label for="detele_topic">Mot de passe administrateur : </label> <input type="password" name="delete_topic" id="detele_topic"> <br >

            <button type="submit">Suppression</button>
        </form>
    </body>
</html>




