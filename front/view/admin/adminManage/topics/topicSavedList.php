<?php session_start();
    require_once('../../../../../back/controllers/administratorManageCtrl/gettingTablesCtrl/getAllSubjects.php');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title>Liste des thèmes du forum</title>
    </head>
    <body>

        <div>
            <?php include_once('../../adminDetails/adminDetails.php'); ?>
        </div>

        <a href="../../adminHome/adminHomePage.php">Retour</a>

        <h2>Liste des thèmes du forum</h2>

        <div class="card-flex">
            <?php foreach(getSubjectsCtrl() as $subjects): ?>
                <div class="card">
                    <p>
                        <strong>Identifiant : </strong> <?= $subjects['id']; ?>
                    </p>

                    <p>
                        <strong>Auteur : </strong> <?= $subjects['author']; ?>
                    </p>

                    <p>
                        <strong>Thème : </strong> <?= $subjects['topic']; ?>
                    </p>

                    <p>
                        <strong>Description : </strong> <?= $subjects['describtion']; ?>
                    </p>

                    <p>
                        <strong>Ajouté le : </strong> <?= $subjects['dateFr']; ?>
                    </p>

                    <p>
                        <a href="deleteTopic.php?id=<?= $subjects['id']; ?>" style="color: red;">Supprimer le thème</a>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="topic-pagination">
            <?php for($i=1; $i<=getLinkTopicsPagination(); $i++): ?>
                <?php if(getCurrentTopicPage() != $i): ?>
                    <p>
                        <a href="?current_page=<?= $i; ?>"><?= $i; ?></a>
                    </p>
                <?php else :?>
                    <p>
                        <a><?= $i; ?></a>
                    </p>
                <?php endif; ?>
            <?php endfor; ?>
        </div>
    </body>
</html>