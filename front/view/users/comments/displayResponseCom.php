<?php session_start();
    require_once('../../../../back/controllers/topicsCtrl/commentTopicCtrl.php');
    require_once('../../../../back/controllers/topicsCtrl/getCommentIdCtrl.php');
    require_once('../../../../back/controllers/topicsCtrl/getComResponsesCtrl.php');

    $getting_post = displayTopic();
    $get_com = getComCtrl();


?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link>
        <title>Répondre au commentaire sur le post <?= $getting_post['topic']; ?></title>
    </head>

    <body>

        <div>
            <?php include_once('../userDetails/userDetails.php'); ?>
        </div>

        <div>
            <a href="displayPostComments.php?idPost=<?= $getting_post['id']; ?>">Retour</a><br >
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

        <strong>Commentaire : </strong> <?= $get_com['comment']; ?><br >
        posté par <em><?= $get_com['author'] ?></em>

        <div>

            <p>Réponses associées au commentaires</p>

            <?php foreach(getComResponsesCtrl() as $response): ?>

                <ul>
                    <li><?= $response['response']; ?> <em class="author-em">Publié par <?= $response['author']; ?></em> </li>
                </ul>

            <?php endforeach; ?>
        </div>


        <form method="POST" action="../../../../back/router/rout.php?action=setResponseCtrl&amp;idPost=<?= $getting_post['id']; ?>&amp;idCom=<?= $get_com['id']; ?>">
            <div>
                <label for="response"></label><br >
                <textarea name="response" id="response" cols="45" rows="5" required>

                </textarea>
            </div>

            <button type="submit">Répondre au commentaire</button>
        </form>

    </body>
</html>






<style>
    .author-em {
        text-decoration: underline;
    }

    li {
        list-style: none;
    }
</style>
