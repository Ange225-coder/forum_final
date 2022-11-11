<?php
    $title = 'Suppression effectuée';
    ob_start();
?>

<p>
    <a href="../../../../../../index.php">Revenir à l'accueil</a>
</p>

<p>
    Votre compte viens d'être supprimé.<br >
    Vous pouvez à nouveau <a href="../../../userRegistration/registration.php">Créer un compte</a>
</p>

<?php
    $content = ob_get_clean();
    require_once('../../../../templates/layout/layout.php');
?>