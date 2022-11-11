<?php session_start();
    require_once('../../../../back/controllers/topicsCtrl/commentTopicCtrl.php');

    $getting_post = displayTopic();
    $title = $getting_post['topic'];
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title><?= $title; ?></title>
    </head>
    <body>

        <div>
            <?php include_once('../userDetails/userDetails.php'); ?>
        </div>

        <div>

            <p>
                <strong><?= $getting_post['topic']; ?></strong> publié </em> par <?= $getting_post['author']; ?>
            </p>

            <p>
                <?= $getting_post['describtion']; ?>
            </p>

        </div>

        <!-- comment form right here -->

        <form method="POST" action="../../../../back/router/rout.php?action=insertCommentsCtrl&amp;idPost=<?= $getting_post['id']; ?>">

            <div>
                <label for="comment">Écrire un commentaire</label><br >
                <textarea name="comment" id="comments" rows="5" cols="50"></textarea>
            </div>

            <button type="submit">Poster votre commentaire</button>
        </form>
    </body>
</html>


