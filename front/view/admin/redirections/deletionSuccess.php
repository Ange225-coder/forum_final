<?php
    $title = 'Suppression effectuée';
    ob_start();
?>

<p>
    Suppression effectuée avec succès.
</p>

<p>
    <a href="../adminHome/adminHomePage.php">Retour à l'accueil</a>
</p>

<?php
    $content = ob_get_clean();
    require_once('../../templates/layout/layout.php');
?>