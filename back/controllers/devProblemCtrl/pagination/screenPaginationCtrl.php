<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once($path);
    });

    use App\Model\DevProblems\DevProblemsManage;


    function getCurrentScreensPage()
    {
        DevProblemsManage::$current_page = @$_GET['current_page'];

        if(!isset(DevProblemsManage::$current_page)) {
            DevProblemsManage::$current_page = 1;
        }

        return DevProblemsManage::$current_page;
    }


    function getStartScreenPagination()
    {
        return $debut = (getCurrentScreensPage() - 1) * DevProblemsManage::$screen_by_page;
    }



    function getLinkDisplayScreenPagination()
    {
        $get_screenLink = new DevProblemsManage();

        return $link = ceil($get_screenLink->screenPagination() / DevProblemsManage::$screen_by_page);
    }