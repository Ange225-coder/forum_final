<?php

    declare(strict_types = 1);

    namespace App\Model\Users\Forgotten;

    use App\Model\Admin\AdministratorManage\DeletionUsers;

    class ForgottenPwd extends DeletionUsers
    {
        public const ERROR_EMAIL = 'Cet email n\'existe pas en base';

        public function getAllUsers(): array
        {
            $db = $this->dbConnect();
            $queryGetAllUsers = $db->prepare('SELECT * FROM users');
            $queryGetAllUsers->execute(array());

            return $queryGetAllUsers->fetchAll();
        }
    }