<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn) {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once($path);
    });

    use App\Model\Topics\TopicsManage;

    function topicsManageCtrl(): void
    {
        if(isset($_POST['topic']) && isset($_POST['describtion'])) {
            $_POST['topic'] = htmlspecialchars($_POST['topic']);
            $_POST['describtion'] = htmlspecialchars($_POST['describtion']);

            $new_topic = new TopicsManage;
            $new_topic->insertNewTopic($_SESSION['email'], $_POST['topic'], $_POST['describtion']);


        }
        else {
            throw new Exception('Impossible de soumettre le formulaire');
        }
    }