<?php session_start();
    require_once('../../../../back/controllers/topicsCtrl/commentTopicCtrl.php');
    require_once('../../../../back/controllers/topicsCtrl/getCommentsCtrl.php');

    $getting_post = displayTopic();

    $title = $getting_post['topic'];
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?= $title; ?></title>
    </head>

    <body>

        <div>
            <?php include_once('../userDetails/userDetails.php'); ?>
        </div>

        <div>
            <a href="../topics/topicsList.php">Accueil</a>
        </div>

        <div>

            <p>
                <strong><?= $getting_post['topic']; ?></strong> publié par <?= $getting_post['author']; ?>
            </p>

            <p>
                <?= $getting_post['describtion']; ?>
            </p>

        </div>

        <h2>Commentaire</h2>

        <div>

            <?php  foreach(gettingComments() as $comments):?>

                <p>
                    <strong>Commentaire : </strong><?= $comments['comment'] ?><br>
                    posté par <em><?= $comments['author'] ?></em> le <?= $comments['dateComFr']; ?><br >

                    <a href="displayResponseCom.php?idPost=<?= $getting_post['id']; ?>&amp;idCom=<?= $comments['id']; ?>">Voir les réponses du commentaire</a>
                </p>

            <?php endforeach; ?>

        </div>

    </body>
</html>