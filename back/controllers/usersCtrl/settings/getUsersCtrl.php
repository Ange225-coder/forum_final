<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once('../../'.$path);
    });

    use App\Model\Users\Settings\UsersSettingsManage;

    function getUserCtrl()
    {
        $get_users = new UsersSettingsManage();
        $get_users->getUsers();

        return $get_users;
    }