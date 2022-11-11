<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once($path);
    });

    use App\Model\Admin\AdministratorManage\PaginationForAdmin;

    function getCurrentCommentPage()
    {
        $get_currentPage = new PaginationForAdmin();
        PaginationForAdmin::$current_page = @$_GET['current_page'];

        if(!isset(PaginationForAdmin::$current_page)) {
            PaginationForAdmin::$current_page = 1;
        }

        return PaginationForAdmin::$current_page;
    }


    function getStartCommentPagination(): int
    {
        $get_start = new PaginationForAdmin;

        $debut = (getCurrentCommentPage() - 1) * PaginationForAdmin::$comment_par_page;

        return $debut;
    }


    function getLinkCommentPagination()
    {
        $get_link = new PaginationForAdmin;

        $link_to_display = ceil($get_link->getCommentsPagination()/PaginationForAdmin::$comment_par_page);

        return $link_to_display;
    }