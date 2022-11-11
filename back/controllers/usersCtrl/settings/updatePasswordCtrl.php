<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once($path);
    });

    use App\Model\Users\Settings\UsersSettingsManage;

    function update_passwordCtrl()
    {
        if(isset($_SESSION['id']) && $_SESSION['id'] > 0 && is_numeric($_SESSION['id'])) {

            $updating_pass = new UsersSettingsManage();

            if(isset($_POST['current_pass'])) {
                $current_hash = sha1($_POST['current_pass']);

                if($current_hash !== $_SESSION['pass']) {
                    throw new Exception('Le mot de passe actuel est erroné');
                }

                if(isset($_POST['newPwd']) && isset($_POST['confirm-pass'])) {
                    if($_POST['newPwd'] !== $_POST['confirm-pass']) {
                        throw new Exception('Les nouveaus mots de passe ne correspondent pas');
                    }
                    else {
                        $new_hash = sha1($_POST['newPwd']);

                        $updating_pass->update_pass($new_hash, $_SESSION['id']);
                    }
                }
            }
        }
        else {
            throw new Exception('Veuillez entrer un identifiant pour cet utilisateur');
        }
    }