<?php

    declare(strict_types = 1);
    
    spl_autoload_register(static function($fqcn) {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once('../../../../'.$path);
    });

    use App\Model\Comments\CommentsManage;

    function displayTopic(): array
    {
        if(isset($_GET['idPost']) && $_GET['idPost'] > 0 && is_numeric($_GET['idPost'])) {

            $post = new CommentsManage;
            $getting_post = $post->getPost($_GET['idPost']);
        }
        else {
            throw new Exception('Entrer l\'identifiant du post à commenter');
        }

        return $getting_post;
    }