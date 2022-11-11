<?php session_start();

    require_once('../../../../../back/controllers/administratorManageCtrl/gettingTablesCtrl/getAllUsersCtrl.php');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title>Liste des utilisateurs du site</title>
    </head>
    <body>

        <div>
            <?php include_once('../../adminDetails/adminDetails.php'); ?>
        </div>

        <a href="../../adminHome/adminHomePage.php">Retour</a>

        <h2>Liste des utilisateurs</h2>

        <div class="card-flex">
            <?php foreach(getUsersCtrl() as $users): ?>
                <div  class="card">
                    <p>
                        <strong>Identifiant : </strong><?= $users['id']; ?>
                    </p>

                    <p>
                        <strong>Pseudonyme : </strong><?= $users['pseudo']; ?>
                    </p>

                    <p>
                        <strong>Email : </strong><?= $users['email']; ?>
                    </p>

                    <p>
                        <strong>Inscris le : </strong><?= $users['registration_dateFr']; ?>
                    </p>

                    <!-- supprimer user en fonction de son id -->
                    <p>
                        <a href="deleteUser.php?id=<?= $users['id']; ?>" style="color: red;">Supprimer cette utilisateurs</a>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="user-pagination">
            <?php for($i=1; $i<= getLinkPagination(); $i++): ?>
                <?php if(getGetCurrentPageCtrl() != $i): ?>
                    <p>
                        <a href="?current_page=<?= $i; ?>"><?= $i; ?></a>
                    </p>
                <?php else: ?>
                    <p>
                        <a><?= $i ?></a>
                    </p>
                <?php endif; ?>
            <?php endfor; ?>
        </div>
    </body>
</html>