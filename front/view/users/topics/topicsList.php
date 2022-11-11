<?php  session_start();
    require_once('../../../../back/controllers/topicsCtrl/readingTopicCtrl.php');
    require_once('../../../../back/controllers/topicsCtrl/researchTopicCtrl.php');

    use App\Model\Topics\TopicsManage;

    /**  $counter is an instance to make research */
    $counter = new TopicsManage();

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title>Listes des thèmes</title>
    </head>

    <body>

        <div>
            <?php include_once('../userDetails/userDetails.php'); ?>
        </div>

        <div>

            <h1>Topic et description des thèmes du forum</h1>

            <p>
                <a href="../userHome/memberHomePage.php">Retour au menu</a>
            </p>

            <!-- search form -->

            <form method="GET" action="">
                <label for="keyword">
                    <input type="text" name="keyword" id="keyword" placeholder="Mot-clés">
                </label>

                <button name="valider" type="submit">Rechercher un thème</button>
            </form>

            <!-- search result -->





            <?php foreach(readingTopic() as $read): ?>

                <div class="topic">
                    <p>
                        <strong><?= $read['topic']; ?></strong> publié le <em><?= $read['dateFr']; ?></em> par <?= $read['author']; ?>
                    </p>

                    <p>
                        <?= $read['describtion']; ?>
                    </p>

                    <p>
                        <a href="../comments/commentTopic.php?idPost=<?= $read['id']; ?>" title="poster un commentaire">Donnez un avis</a>
                    </p>

                    <p>
                        <!-- afficher le post et ses commentaires en cliquant sur ce lien -->
                        <a href="../comments/displayPostComments.php?idPost=<?= $read['id']; ?>" title="Voir les commentaires de <?= $read['topic']; ?>">Voir les autres avis</a>
                    </p>
                </div>

            <?php endforeach; ?>

        </div>
    </body>
</html>





<style>
    .topic {
        border:  1px solid black;
        margin-bottom: 1%;
        margin-top: 2%;
    }
</style>





