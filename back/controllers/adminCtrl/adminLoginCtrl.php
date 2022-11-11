<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once($path);
    });

    use App\Model\Admin\Login\AdminLoginManage;

    function adminLoginCtrl(): void
    {
        $login_admin = new AdminLoginManage;

        if(isset($_POST['username']) && isset($_POST['password'])) {

            $_POST['username'] = htmlspecialchars($_POST['username']);
            $pass_hased = sha1($_POST['password']);

            foreach($login_admin->getUsername() as $checkAdmin) {
                if($_POST['username'] === $checkAdmin['username'] && $pass_hased === $checkAdmin['admin_password']) {
                    $admin_logged = [
                        'username' => $checkAdmin['username'],
                        'admin_password' => $checkAdmin['admin_password'],
                        'id' => $checkAdmin['id'],
                    ];

                    $_SESSION['username'] = $admin_logged['username'];
                    $_SESSION['password'] = $admin_logged['admin_password'];

                    setcookie(
                        'ADMIN-LOGGED',
                        $admin_logged['username'],
                        [
                            'expires' => time() + 24*3600,
                            'secure' => true,
                            'httponly' => true,
                        ]
                    );

                    /**
                     * cookie that saves admin password
                     * to use it if session disconnects
                     */
                    setcookie(
                        'ADMIN-PASSWORD',
                        $admin_logged['admin_password'],
                        [
                            'expires' => time() + 24*3600,
                            'secure' => true,
                            'httponly' => true,
                        ]
                    );
                }
                else {
                    $error_login_admin = 'Vous n\'avez pas accès à cet espace';
                    
                }
            }
        }
    }