<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn) {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once('../../../../'.$path);
    });

    use App\Model\Comments\CommentsManage;

    function getComResponsesCtrl(): array
    {
        if(isset($_GET['idPost']) && $_GET['idPost'] > 0 && is_numeric($_GET['idPost'])) {
            if(isset($_GET['idCom']) && $_GET['idCom'] > 0 && is_numeric($_GET['idCom'])) {

                $get_response = new CommentsManage();
                $response = $get_response->getCommentResponses($_GET['idCom']);
            }
            else {
                throw new Exception('Identifiant du commentaire inexistant, impossible de voir les réponses');
            }
        }
        else {
            throw new Exception('Identifiant du post inexistant');
        }

        return $response;
    }