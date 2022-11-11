<?php session_start();

    require_once('../../../../back/controllers/devProblemCtrl/getAllProblemsCtrl.php');
    require_once('../../../../back/controllers/devProblemCtrl/pagination/screenPaginationCtrl.php');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title>Liste des préoccupations</title>
    </head>

    <body>

        <div>
            <?php include_once('../../users/userDetails/userDetails.php'); ?>
        </div>

        <h2> Descriptions et captures des préoccupations</h2>

        <p>
            <a href="../../users/userHome/memberHomePage.php">Retour à l'accueil</a>
        </p>

        <?php foreach(getProblemsCtrl() as $problem): ?>

            <div class="card">

                <p>
                    <strong>Langage utilisé : </strong><?= $problem['language']; ?>
                </p>

                <p>
                    <strong>Description : </strong><?= $problem['description']; ?>
                </p>

                <p>
                    <a href="showProblemDetails.php?id=<?= $problem['id']; ?>">Voir en detail</a>
                </p>

            </div>

        <?php endforeach; ?>


        <div class="devProblem-pagination">

            <?php for($i=1; $i<=getLinkDisplayScreenPagination(); $i++): ?>
                <?php if(getCurrentScreensPage() != $i): ?>
                    <p>
                        <a href="?current_page=<?= $i; ?>"><?= $i; ?></a>
                    </p>
                <?php else: ?>
                    <p>
                        <a><?= $i; ?></a>
                    </p>
                <?php endif; ?>
            <?php endfor; ?>

        </div>
    </body>
</html>


