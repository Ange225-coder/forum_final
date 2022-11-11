<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once($path);
    });

    use App\Model\Comments\CommentsManage;

    function gettingComments()
    {
        if(isset($_GET['idPost']) && $_GET['idPost'] > 0 && is_numeric($_GET['idPost'])) {

            $get_com = new CommentsManage;
            $gettingCom = $get_com->getComments($_GET['idPost']);
        }
        else {
            throw new Exception('Entrer l\'identifiant du post pour afficher ses commentaires');
        }

        return $gettingCom;
    }