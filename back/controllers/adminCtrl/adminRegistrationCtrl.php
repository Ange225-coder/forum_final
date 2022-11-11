<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once($path);
    });

    use App\Model\Admin\Registration\AdminregistrationManage;

    function adminRegistrationCtrl(): object
    {
        if(isset($_POST['username']) && isset($_POST['admin_password'])) {
            $_POST['username'] = htmlspecialchars($_POST['username']);
            $_POST['admin_password'] = sha1($_POST['admin_password']);

            $admin = new AdminRegistrationManage;

            /**
             * regex to verify if username enter in
             * form is same with regex
            */
            if(preg_match('#^(ADMIN-)+([a-zA-Z0-9])+$#', $_POST['username'])) {
                foreach($admin->checkingUsername() as $check){
                    if($_POST['username'] == $check['username']) {
                        throw new Exception('Cet Administrateur existe déjà');
                    }
                }
            }
            else {
                throw new Exception('Format d\'enregistrement administrateur invalide');
            }

            $admin->insertAdmin($_POST['username'], $_POST['admin_password']);

            $_SESSION['username'] = $_POST['username'];
            $_SESSION['admin_password'] = $_POST['admin_password'];


            setcookie(
                'ADMIN-LOGGED',
                $_POST['username'],
                [
                    'expires' => time() + 24*3600,
                    'secure' => true,
                    'httponly' => true,
                ]
            );

            /** cookie which saves the admin password */
            setcookie(
                'ADMIN-PASSWORD',
                $_POST['admin_password'],
                [
                    'expires' => time() + 24*3600,
                    'secure' => true,
                    'httponly' => true,
                ]
            );

        }
        return $admin;
    }