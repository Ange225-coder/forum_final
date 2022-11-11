<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once($path);
    });

    use App\Model\Users\Settings\UsersSettingsManage;

    function deleteAccountCtrl(): void
    {
        if(isset($_SESSION['id']) && $_SESSION['id'] > 0 && is_numeric($_SESSION['id'])) {

            $del_account = new UsersSettingsManage();

            if(isset($_POST['password'])) {
                $del_hash = sha1($_POST['password']);

                if($del_hash !== $_SESSION['pass']) {
                    throw new Exception('Le mot de passe est erroné');
                }
                else {
                    $del_account->delete_account($_SESSION['id']);
                }
            }
        }
        else {
            throw new Exception('Entrer un identifiant pour supprimer l\'utilisateur');
        }
    }