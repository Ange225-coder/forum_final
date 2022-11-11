<?php
    $title = 'Mise à jour éffectuée';
    ob_start();
?>

<div>
    <p>
        Mise à jour éffectuée avec succees !<br >
        <a href="../../../../../../back/logout/logout.php">Cliquer ici </a> pour vous déconnecter afin de prendre la mise à jour en compte
    </p>
</div>

<?php
    $content = ob_get_clean();
    require_once('../../../../templates/layout/layout.php');
?>