<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title>Vos paramètres</title>
    </head>

    <body>

        <h1>Paramètres utilisateurs</h1>

        <form method="POST" action="../../../../../../back/router/rout.php?action=update_emailCtrl&amp;id=<?= $_SESSION['id']; ?>">
            <h2>Mettre l'email à jour</h2>

            <div>
                <label for="email">Email actuel : </label><br >
                <input type="email" name="email" id="email" value="<?= $_SESSION['email']; ?>">
            </div>

            <div>
                <label for="update_email">Nouvel email</label><br >
                <input type="email" name="new_email" id="update_email" required>
            </div>

            <button type="submit">Mettre à jour l'email</button>
        </form>


        <form method="POST" action="../../../../../../back/router/rout.php?action=update_passwordCtrl&amp;id=<?= $_SESSION['id']; ?>">
            <h2>Mettre à jour le mot de passe</h2>

            <div>
                <label for="current_pass">Mot de passe actuel</label><br >
                <input type="password" id="current_pass" name="current_pass" required>
            </div>

            <div>
                <label for="newPwd">Nouveau mot de passe</label><br >
                <input type="password" id="newPwd" name="newPwd" required>
            </div>

            <div>
                <label for="confirm-pass">Confirmez le mot de passe</label><br >
                <input type="password" name="confirm-pass" id="confirm-pass" required>
            </div>

            <button type="submit">Mettre à jour le mot de passe</button>
        </form>


        <h2>Suppression du compte</h2>

        <div>
            <p>
                <a href="../deletion/deleteAccount.php">Supprimer mon compte</a>
            </p>
        </div>
    </body>
</html>