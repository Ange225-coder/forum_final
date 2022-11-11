<?php

    declare(strict_types=1);

    spl_autoload_register(static function (string $fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn) . '.php';
        require_once('../../../../../'.$path);
    });

    use App\Model\Admin\AdministratorManage\GetAllTables;

    function getScreensCtrl(): array
    {
        $get_screen = new GetAllTables();

        return $get_screen->getScreens();
    }