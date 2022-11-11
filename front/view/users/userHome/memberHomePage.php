<?php session_start();

    if(!isset($_SESSION['email']) || !isset($_SESSION['pass'])){


        header('Location: ../../users/userLogin/login.php');
    }

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title>Bienvenue <?= $_SESSION['pseudo']; ?></title>
        <link>
    </head>

    <body>

        <div>
            <?php require_once('../../users/userDetails/userDetails.php'); ?>
        </div>

        <h1>Bienvenue sur le forum</h1>

        <div>
            <p>
                Ce forum est destiné aux passionnés de la programmation et de l'informatique en général.<br >
                Ici Vous pouvez créer vos sujets de discussion, vous pourrez également donner un avis sur le post d'autres auteurs.
            </p>

            <p>
                <a href="../topics/newSubject.php">Créer un sujet</a> <br >
                <a href="../topics/topicsList.php">Voir la liste des discussions</a><br >
                <a href="../../admin/problemManage/poseProblem.php">Poser une préoccupation en programmation</a><br >
                <a href="../../admin/problemManage/displayProblem.php">voir les autres préoccupations</a>
            </p>
        </div>
    </body>
</html>
