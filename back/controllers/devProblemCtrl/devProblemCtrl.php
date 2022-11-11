<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once($path);
    });

    use App\Model\DevProblems\DevProblemsManage;

    function setProblemCtrl()
    {
        if(isset($_POST['language']) && isset($_POST['description'])) {
            $_POST['language'] = trim(htmlspecialchars($_POST['language']));
            $_POST['description'] = trim(htmlspecialchars($_POST['description']));
        }

        if(isset($_FILES['screenshots']['name'])) {

            if($_FILES['screenshots']['size'] > 2000000) {
                throw new Exception('Cette image est trop volumineuse. Utiliser une image d\'au moins 2Mo');
            }

            if(isset($_FILES['screenshots']['type'])) {
                $screenshotsInfo = pathinfo($_FILES['screenshots']['name']);
                $screenshotsExtension = @$screenshotsInfo['extension'];
                $allowedExtensions = ['jpg', 'png', 'gif'];

                if(!in_array($screenshotsExtension, $allowedExtensions)) {
                    throw new Exception('Cette extension n\'est pas prise en compte. Choisissez une image du type PNG GIF ou JPEG');
                }

            }
        }

        $problem_manage = new DevProblemsManage();
        $problem_manage->setProblem($_SESSION['id'], $_SESSION['pseudo'], $_POST['language'], $_POST['description'], $_FILES['screenshots']['name'], $_FILES['screenshots']['size'], $_FILES['screenshots']['type'], file_get_contents($_FILES['screenshots']['tmp_name']));

    }