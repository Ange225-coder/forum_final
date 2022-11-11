<?php

    declare(strict_types = 1);

    spl_autoload_register(static function(string $fqcn): void{
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once('../../../../../'.$path);
    });

    use App\Model\Admin\AdministratorManage\DeletionUsers;

    function getUserIdCtrl(): array
    {
        if(isset($_GET['id']) && $_GET['id'] > 0 && is_numeric($_GET['id'])) {

            $get_user_id = new DeletionUsers();
            $get_id = $get_user_id->getUserId($_GET['id']);
        }
        else {
            /** echo a ameliorer avec Exception on une variable */
            echo 'Entrez l\'identifiant de l\'utilisateur à supprimer';
        }

       return $get_id;
    }