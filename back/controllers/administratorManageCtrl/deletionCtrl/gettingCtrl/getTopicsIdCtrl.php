<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once('../../../../../'.$path);
    });

    use App\Model\Admin\AdministratorManage\DeletionTopics;

    function getTopicIdCtrl(): array
    {
        if(isset($_GET['id']) && $_GET['id'] > 0 && is_numeric($_GET['id'])) {

            $get_topic_id = new DeletionTopics();
            $getTopicId = $get_topic_id->getTopicId($_GET['id']);
        }
        else{
            /** echo a ameliorer avec Exception on une variable */
            echo 'Enter l\'identifiant du thème à supprimer';
        }

        return $getTopicId;
    }