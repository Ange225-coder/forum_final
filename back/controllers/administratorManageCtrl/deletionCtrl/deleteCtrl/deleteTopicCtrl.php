<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once($path);
    });

    use App\Model\Admin\AdministratorManage\DeletionTopics;

    function deleteTopicCtrl(): void
    {
        if(isset($_GET['id']) && $_GET['id'] > 0 && is_numeric($_GET['id'])) {
            if(isset($_POST['delete_topic'])) {

                $admin_pwd_hash = sha1($_POST['delete_topic']);

                if(isset($_COOKIE['ADMIN-PASSWORD']) && $admin_pwd_hash === $_COOKIE['ADMIN-PASSWORD']) {

                    $delete_user = new DeletionTopics();
                    $delete_user->delete_topic($_GET['id']);
                }
                else {
                    /** echo a ameliorer avec throw ou a vec une variable */
                    throw new Exception('Le mot de passe administateur est incorrect');
                }
            }
        }
        else {
            /** echo à ameliorer avec une variable ou avec throw */
            throw new Exception('Entrez l\'identifiant du sujet à supprimer');
        }
    }