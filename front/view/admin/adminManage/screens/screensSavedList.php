<?php session_start();
    require_once('../../../../../back/controllers/administratorManageCtrl/gettingTablesCtrl/getAllScreens.php');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title>Liste des préoccupations</title>
    </head>
    <body>

        <div>
            <?php include_once('../../adminDetails/adminDetails.php '); ?>
        </div>

        <p>
            <a href="../../adminHome/adminHomePage.php">Retour</a>
        </p>

        <h2>Liste des préoccupations</h2>

        <div class="screen-pagination">
            <?php foreach(getScreensCtrl() as $screen): ?>

                <div class="screen-card">
                    <p>
                        <strong>Identifiant : </strong> <?= $screen['id']; ?>
                    </p>

                    <p>
                        <strong>Auteur : </strong> <?= $screen['author']; ?>
                    </p>

                    <p>
                        <strong>Langage utilisé : </strong> <?= $screen['language']; ?>
                    </p>

                    <p>
                        <strong>Description : </strong> <?= $screen['description']; ?>
                    </p>



                    <p>
                        <a href="../../problemManage/delProbleme.php?id=<?= $screen['id'] ?>" class="del-link">Supprimer cette préocupation</a>
                    </p>
                </div>

            <?php endforeach; ?>
        </div>



        <div class="admin-problem-pagination">
            <?php for($i=1; $i<=getLinkDisplayScreenPagination(); $i++): ?>
                <?php if(getCurrentScreensPage() != $i): ?>
                    <p>
                        <a href="?current_page=<?= $i; ?>"><?= $i; ?></a>
                    </p>
                <?php else : ?>
                    <p>
                        <a><?= $i; ?></a>
                    </p>
                <?php endif; ?>
            <?php endfor; ?>
        </div>
    </body>
</html>