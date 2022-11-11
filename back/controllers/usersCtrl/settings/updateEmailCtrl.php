<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once($path);
    });

    use App\Model\Users\Settings\UsersSettingsManage;

    function update_emailCtrl()
    {
        if(isset($_SESSION['id']) && $_SESSION['id'] > 0 && is_numeric($_SESSION['id'])) {
            if(isset($_POST['new_email'])) {

                $_POST['new_email'] = htmlspecialchars($_POST['new_email']);

                $updating_email = new UsersSettingsManage();

                foreach($updating_email->getUsers() as $emailChecking) {
                    if($_POST['new_email'] === $emailChecking['email']) {
                        throw new Exception(UsersSettingsManage::ERROR_EMAIL);
                    }
                    else {
                        $updating_email->update_email($_POST['new_email'], $_SESSION['id']);
                    }
                }
            }
        }
        else {
            throw new Exception(UsersSettingsManage::ERROR_ID);
        }

    }