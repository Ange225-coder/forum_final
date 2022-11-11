<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once($path);
    });

    use App\Model\Admin\AdministratorManage\DeletionUsers;

    function deleteUserCtrl(): void
    {
        if(isset($_GET['id']) && $_GET['id'] > 0 && is_numeric($_GET['id'])) {
            if(isset($_POST['delete'])) {

                $admin_pwd_hash = sha1($_POST['delete']);

                if(isset($_COOKIE['ADMIN-PASSWORD']) && $admin_pwd_hash === $_COOKIE['ADMIN-PASSWORD']) {

                    $delete_user = new DeletionUsers();
                    $delete_user->delete_user($_GET['id']);
                }
                else {
                    /** echo a améliorer avec throw ou a vec une variable */
                    throw new Exception('Le mot de passe administrateur est incorrect');
                }
            }
        }
        else {
            throw new Exception('Entrer l\'identifiant de l\'utilisateur à supprimer');
        }

    }
