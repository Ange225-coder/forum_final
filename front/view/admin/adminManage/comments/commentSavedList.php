<?php session_start();
    require_once('../../../../../back/controllers/administratorManageCtrl/gettingTablesCtrl/getAllComments.php');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title>Liste des commentaires des thèmes</title>
    </head>
    <body>

        <div>
            <?php include_once('../../adminDetails/adminDetails.php'); ?>
        </div>

        <a href="../../adminHome/adminHomePage.php">Retour</a>

        <h2>Liste des commentaires</h2>

        <div class="card-flex">
            <?php foreach(getCommentsCtrl() as $comments): ?>
                <div class="card">
                    <p>
                        <strong>Identifiant : </strong><?= $comments['id']; ?>
                    </p>

                    <p>
                        <strong>Identifiant du thème commenté : </strong> <?= $comments['id_post']; ?>
                    </p>

                    <p>
                        <strong>Commentaires : </strong> <?= $comments['comment']; ?>
                    </p>

                    <p>
                        <strong>Auteur : </strong> <?= $comments['author']; ?>
                    </p>

                    <p>
                        <strong>Commentaire posté le : </strong> <?= $comments['dateFr']; ?>
                    </p>

                    <p>
                        <a href="deleteComment.php?id=<?= $comments['id']; ?>" style="color: red;">Supprimer ce commentaire</a>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="comment-pagination">
            <?php for($i=1; $i<=getLinkCommentPagination(); $i++): ?>
                <?php if(getCurrentCommentPage() != $i): ?>
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





