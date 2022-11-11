<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn ).'.php';
        require_once('../../../../../'.$path);
    });

    use App\Model\Admin\AdministratorManage\DeletionComment;

    function getCommentIdCtrl(): array
    {
        if(isset($_GET['id']) && $_GET['id'] > 0 && is_numeric($_GET['id'])) {

            $get_comment_id = new DeletionComment;
            $comment_id = $get_comment_id->getCommentId($_GET['id']);
        }
        else {

            echo 'Enter l\'identfiant avant du commentaire avant de le supprimer';
        }

        return $comment_id;
    }