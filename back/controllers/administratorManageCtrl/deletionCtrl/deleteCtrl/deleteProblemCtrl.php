<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once($path);
    });

    use App\Model\Admin\AdministratorManage\DeletionProblem;

    function deleteProblemCtrl(): void
    {
        if(isset($_GET['id']) && $_GET['id'] > 0 && is_numeric($_GET['id'])) {
            if(isset($_POST['admin_pass'])) {

                $admin_pass_hash = sha1($_POST['admin_pass']);

                if(isset($_COOKIE['ADMIN-PASSWORD']) && $_COOKIE['ADMIN-PASSWORD'] === $admin_pass_hash) {

                    $problem_deletion = new DeletionProblem();
                    $problem_deletion->deleteProblem($_GET['id']);
                }
                else {
                    throw new Exception('Le mot de passe administrateur ne correspond pas');
                }
            }
        }
        else {
            throw new Exception('Entrer l\'identifiant de la préoccupation à supprimer');
        }
    }