<?php session_start(); ?>

<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf8">
            <title>Créer un sujet sur le forum</title>
        </head>

        <body>

            <div>
                <?php include_once('../userDetails/userDetails.php'); ?>
            </div>


            <h2>Création d'un nouveau sujet</h2>

            <form method="POST" action="../../../../back/router/rout.php?action=topicsManageCtrl">

                <div>
                    <label for="topic">Thème du sujet</label><br >
                    <textarea name="topic" id="topic" placeholder="Ex: PHP, C++..." rows="3" cols="40" required>

                    </textarea>
                </div>

                <div>
                    <label for="describtion">Déscription du thème</label><br >
                    <textarea name="describtion" id="describtion" placeholder="Dites en quelques mots pourquoi vous créer le sujet" rows="4" cols="60" required>

                    </textarea>
                </div>

                <button type="submit">Créer le sujet</button>
            </form>
        </body>
    </html>



