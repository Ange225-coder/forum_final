<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once($path);
    });

    use App\Model\Topics\TopicsManage;

    function setSearchCtrl(): array
    {
        if(isset($_GET['valider']) && !empty($_GET['keyword'])) {

            $word = new TopicsManage();
            $tab = $word->setSearch($_GET['keyword']);
        }


        return $tab;
    }