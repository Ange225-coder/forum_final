<?php

    declare(strict_types = 1);

    namespace App\Model\Admin\AdministratorManage;

    use App\Model\Admin\Registration\AdminRegistrationManage;

    class DeletionUsers extends AdminRegistrationManage
    {
        public function getPasswordAdmin(): array
        {
            return $this->checkingUsername();
        }

        /**
         * get users based on its id
         */
        public function getUserId(string $id): array
        {
            $db = $this->dbConnect();
            $queryGetUserId = $db->prepare('SELECT * FROM users WHERE id = ?');
            $queryGetUserId->execute(array($id));
            $getUserId = $queryGetUserId->fetch();

            return $getUserId;
        }

        /**
         * delete user based on its id
         */
        public function delete_user(string $id): bool
        {
            $db = $this->dbConnect();
            $queryDel_user = $db->prepare('DELETE FROM users WHERE id = ?');
            $del_user = $queryDel_user->execute(array($id));

            return $del_user;
        }
    }