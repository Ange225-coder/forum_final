<?php 
    
    declare(strict_types = 1);



    /** 
     * autoloading classes with the function
     * spl_autoload_register()
    */

    spl_autoload_register(static function ($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once('../../'.  $path);
    });

    use App\Model\Users\Registration\UserRegistrationManage;

    function newUserInsertionCtrl(): void
    {

        if(isset($_POST['email']) && isset($_POST['pseudo']) && isset($_POST['pass'])) {

            /**
             * trying if email exist in db
             * if exist throw exception for email and stop script
             * else continue to second if
            */
            
            $_POST['email'] = htmlspecialchars($_POST['email']);
            $_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
            $pass_hash = sha1($_POST['pass']);

            $user = new UserRegistrationManage;

            foreach($user->checkingEmail() as $checking) {
                if($_POST['email'] == $checking['email']) {
                    throw new Exception(UserRegistrationManage::ERROR_EMAIL);  
                }
            }   
            
            /**
             * tryin if password and confirm pass are same
             * else create session, cookie and redirected to
             * member homeStyle page
            */
            
            if($_POST['pass'] !== $_POST['confirm_pass']) {
                throw new Exception(UserRegistrationManage::ERROR_PASSWORD);
            }
            else {
                $user->newUserInsertion($_POST['pseudo'], $_POST['email'], $pass_hash);

                $_SESSION['pseudo'] = $_POST['pseudo'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['pass'] = $pass_hash;

                /**
                 * foreach loop to get user id during the registration
                 */
                foreach($user->checkingEmail() as $get_user_id) {
                    $_SESSION['id'] = $get_user_id['id'];
                }

                /** cookie which save username */
                setcookie(
                    'LOGGED_USER',
                    $_POST['email'],
                    [
                        'expires' => time()+24*3600*365,
                        'secure' => true,
                        'httponly' => true,
                    ]
                );


                /** cookie which save user password hashed */

                setcookie(
                    'USER_PWD',
                    $pass_hash,
                    [
                        'expires' => time()+24*3600*365,
                        'secure' => true,
                        'httponly' => true,
                    ]
                );


            }
        }

    }
    

    

    
    
    