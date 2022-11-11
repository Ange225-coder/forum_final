<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once('../../../../'.$path);
    });

    use App\Model\Admin\AdministratorManage\DeletionProblem;

    function deletionProblemCtrl()
    {
        if(isset($_GET['id']) && $_GET['id'] > 0 && is_numeric($_GET['id'])) {

            $get_problem_id = new DeletionProblem();
            $get_id = $get_problem_id->getProblemId($_GET['id']);
        }
        else {
            throw new Exception('Entrer l\'identifiant de la préocupation à supprimer');
        }

        return $get_id;
    }