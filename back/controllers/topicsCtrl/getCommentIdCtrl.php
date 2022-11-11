<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn) {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once('../../../../'.$path);
    });

    use App\Model\Comments\CommentsManage;

    function getComCtrl(): array
    {
        if(isset($_GET['idCom']) && $_GET['idCom'] > 0 && is_numeric($_GET['idCom'])) {

            $comment = new CommentsManage();
            $com = $comment->get_comment($_GET['idCom']);
        }
        else {
            throw new Exception('Entrer l\'identifiant du commentaire');
        }

        return $com;
    }