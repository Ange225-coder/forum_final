<?php

    declare(strict_types = 1);

    /**
     * autoloading classes with the function
     * spl_autoload_register()
     */

    spl_autoload_register(static function ($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once($path);
    });

    use App\Model\Users\Login\UserLoginManage;
    use App\Model\Exceptions\Users\ExceptionLogin;

    function loginUserCtrl(): void
    {
        $login_user = new UserLoginManage;

        if(isset($_POST['email']) && isset($_POST['pass'])) {
            $_POST['email'] = htmlspecialchars($_POST['email']);
            $pwd_hash = sha1($_POST['pass']);

            foreach($login_user->getLoginUser() as $checkingLogin) {
                if ($_POST['email'] === $checkingLogin['email'] && $pwd_hash === $checkingLogin['pass']) {
                    $logged_user = [
                        'pseudo' => $checkingLogin['pseudo'],
                        'email' => $checkingLogin['email'],
                        'pass' => $checkingLogin['pass'],
                        'id' => $checkingLogin['id']
                    ];

                    $_SESSION['pseudo'] = $logged_user['pseudo'];
                    $_SESSION['email'] = $logged_user['email'];
                    $_SESSION['pass'] = $logged_user['pass'];
                    $_SESSION['id'] = $logged_user['id'];

                    setcookie(
                        'LOGGED_USER',
                        $logged_user['email'],
                        [
                            'expires' => time() + 24 * 3600,
                            'secure' => true,
                            'httponly' => true,
                        ]
                    );
                } else {
                    echo 'Données incorrect';

                }
            }
        }
    }


