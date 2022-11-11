<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once($path);
    });

    use App\Model\Users\Forgotten\ForgottenPwd;

    $email_msg = 'http://localhost/forum/front/view/forgotPwd.php';


    function sendMailCtrl(): void
    {
        if(isset($_POST['email'])) {

            ini_set("SMTP","localhost");
            ini_set("smtp_port","25");


            $update_pwd = new ForgottenPwd();
            foreach($update_pwd->getAllUsers() as $checking) {
                if($checking['email'] === $_POST['email']) {



                    if(mail($checking['email'], 'DO PASSWORD UPDATE', 'http://localhost/forum/front/view/forgotPwd.php',)) {
                        echo 'Un email à été envoyé à l\'adresse email entré dans le formulaire';
                    }
                    else {
                        echo 'Une erreur est survenue';
                    }
                }
                else {
                    echo 'Cet email n\'existe pas en base';

                }
            }
        }
    }