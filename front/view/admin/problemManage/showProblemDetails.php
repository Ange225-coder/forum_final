<?php session_start();

    require_once('../../../../back/controllers/devProblemCtrl/getProblemCtrl.php');

    $getting = getProblemCtrl();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title>Voir en details</title>
    </head>
    <body>

        <div>
            <?php include_once('../../users/userDetails/userDetails.php'); ?>
        </div>


        <div>
            <p>
                <strong>Langage utilisé : </strong> <?= $getting['language']; ?>
            </p>

            <p>
                <strong>Description : </strong><?= $getting['description']; ?>
            </p>


            <img src="../../../../back/model/devProblems/imgManage/get_img.php?id=<?= $getting['id']; ?>" alt="img" width="400" height="300">
        </div>
    </body>
</html>




