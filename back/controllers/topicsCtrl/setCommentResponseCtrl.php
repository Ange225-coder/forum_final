<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn) {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once('../../../../'.$path);
    });

    require_once('getCommentIdCtrl.php');

    use App\Model\Comments\CommentsManage;


    function setResponseCtrl()
    {
        if(isset($_GET['idPost']) && $_GET['idPost'] > 0 && is_numeric($_GET['idPost'])) {
            if(isset($_GET['idCom']) && $_GET['idCom'] > 0 && is_numeric($_GET['idCom'])) {

                $getting_com = getComCtrl();

                $res = new CommentsManage();
                $res->setResponse($_GET['idPost'], $_GET['idCom'], $_SESSION['email'], $getting_com['comment'], trim($_POST['response']));
            }
            else {
                throw new Exception('Identifiant du commentaire inexistant, impossible de lui donner une réponse');
            }
        }
        else {
            throw  new Exception('Identifiant du post inexistant');
        }
    }