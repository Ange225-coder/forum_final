<?php

    declare(strict_types = 1);

    spl_autoload_register(static function(string $fqcn): void{
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once('../../../../../'.$path);
    });

    use App\Model\Admin\AdministratorManage\GetAllTables;

    function getCommentsCtrl(): array
    {
        $comments = new GetAllTables;
        $comments = $comments->getComments();

        return $comments;
    }

