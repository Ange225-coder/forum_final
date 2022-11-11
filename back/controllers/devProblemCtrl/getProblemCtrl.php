<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn) {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once('../../../../'.$path);
    });

    use App\Model\DevProblems\DevProblemsManage;

    function getProblemCtrl()
    {
        if(isset($_GET['id']) && $_GET['id'] > 0 && is_numeric($_GET['id'])) {

            $getting_problem = new DevProblemsManage();
            $get_problem = $getting_problem->getProblem($_GET['id']);
        }
        else {
            throw new Exception('Entrer l\'identifiant pour voir les details du post');
        }

        return $get_problem;
    }