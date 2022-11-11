<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once($path);
    });

    use App\Model\Admin\AdministratorManage\DeletionComment;

    function deleteCommentCtrl(): void
    {
        if(isset($_GET['id']) && $_GET['id'] > 0 && is_numeric($_GET['id'])) {
            if(isset($_POST['delete_comment'])) {

                $admin_pwd_hash = sha1($_POST['delete_comment']);

                if(isset($_COOKIE['ADMIN-PASSWORD']) && $admin_pwd_hash === $_COOKIE['ADMIN-PASSWORD']) {

                    $delete_user = new DeletionComment();
                    $delete_user->delete_comment($_GET['id']);
                }
                else {
                    throw new Exception('Le mot de passe administrateur est incorrect');
                }
            }
        }
        else {
            throw new Exception('Entez l\'identifiant du sujet à supprimer');
        }
    }