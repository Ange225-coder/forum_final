<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once($path);
    });

    use App\Model\Comments\CommentsManage;

    function insertCommentsCtrl(): bool
    {
        if(isset($_GET['idPost']) && $_GET['idPost'] > 0 && is_numeric($_GET['idPost'])) {
            if(isset($_POST['comment'])) {
                $_POST['comment'] = htmlspecialchars($_POST['comment']);

                $comment = new CommentsManage;
                $new_com = $comment->insertComments($_GET['idPost'], $_COOKIE['LOGGED_USER'], $_POST['comment']);
            }


            echo 'commentaire inseré';
        }
        else {
            throw new Exception('Entrer l\'identifiant du post à commenter');
        }
        
        return $new_com;
    }