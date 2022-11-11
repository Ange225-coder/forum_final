<?php session_start();

    require_once('../../../../back/controllers/administratorManageCtrl/deletionCtrl/gettingCtrl/getProblemIdCtrl.php');

    $getting_problemId = deletionProblemCtrl();

    $title = 'Supprimer '.$getting_problemId['author'];
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title><?= $title; ?></title>
    </head>

    <body>

        <div>
            <?php include_once('../adminDetails/adminDetails.php'); ?>
        </div>

        <div>
            <p>
                <strong>Identifiant : </strong> <?= $getting_problemId['id']; ?>
            </p>

            <p>
                <strong>Identifiant de l'utilisateur : </strong> <?= $getting_problemId['user_id']; ?>
            </p>

            <p>
                <strong>Auteur : </strong> <?= $getting_problemId['author']; ?>
            </p>

            <p>
                <strong>Description : </strong> <?= $getting_problemId['description'] ?>
            </p>

            <p>
                <strong>Capture associé : </strong><br >
                <img src="../../../../back/model/devProblems/imgManage/get_img.php?id=<?= $getting_problemId['id']; ?>" alt="img" width="400" height="300">
            </p>
        </div>

        <h2>Supprimer cette préoccupation : cette action est irreversible !</h2>

        <form method="POST" action="../../../../back/router/rout.php?action=deleteProblemCtrl&amp;id=<?= $getting_problemId['id']; ?>">
            <label for="del_problem">Mot de passe administrateur : </label> <input type="password" name="admin_pass" id="del_problem" required><br >

            <button type="submit">Suppression</button>
        </form>
    </body>
</html>



