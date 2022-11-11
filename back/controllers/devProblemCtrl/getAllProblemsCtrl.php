<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once('../../../../'.$path);
    });

    use App\Model\DevProblems\DevProblemsManage;

    function getProblemsCtrl(): array
    {
        $get_problem = new DevProblemsManage();

        return $get_problem->getAllProblems();
    }