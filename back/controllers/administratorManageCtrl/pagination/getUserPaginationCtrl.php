<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once('../../../'.$path);
    });

    use App\Model\Admin\AdministratorManage\PaginationForAdmin;

    function getGetCurrentPageCtrl()
    {
        PaginationForAdmin::$current_page = @$_GET['current_page'];

        if(!isset(PaginationForAdmin::$current_page)) {
            PaginationForAdmin::$current_page = 1;
        }

        return PaginationForAdmin::$current_page;
    }

    /** get start of pagination
     *to put the return of this function in
     *AdministrationRegistrationManage::checkingUsername
     *
     * if there are a problems rewrite DeletionUsers::getPassword
     */
    function getStartPagination(): int
    {
        $pagination_user = new PaginationForAdmin();

        return (getGetCurrentPageCtrl() - 1) * PaginationForAdmin::$user_par_page;
    }

    function getLinkPagination(): float
    {
        $get_link = new PaginationForAdmin();

        return ceil($get_link->getUsersPagination()/PaginationForAdmin::$user_par_page);
    }