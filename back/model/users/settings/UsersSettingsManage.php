<?php

    declare(strict_types = 1);

    namespace App\Model\Users\Settings;

    use App\Model\Database\DbManage;

    class UsersSettingsManage extends DbManage
    {
        public const ERROR_EMAIL = 'L\'email existe déjà en base';
        public const ERROR_ID = 'L\'Entrer l\'identifiant de l\'utilisateur avant de faire la mise à jour';

        public const ERROR_CURRENT_PWD = 'Entrer le mot de passe actuel avant de faire la mise à jour';
        public const ERROR_CONFIRM_PWD = 'Les mots de passe ne correspondent pas';


        /**
         * function wich gets alls users
         * based on its id
         */

        public function getUsers(): array
        {
            $db = $this->dbConnect();
            $queryGetUsersId = $db->prepare('SELECT * FROM users');
            $queryGetUsersId->execute(array());

            return $queryGetUsersId->fetchAll();
        }


        public function update_email(string $email, string $id): bool
        {
            $db = $this->dbConnect();
            $queryUpdate_email = $db->prepare('UPDATE users SET email = ? WHERE id = ?');

            return $queryUpdate_email->execute(array($email, $id));
        }


        public function update_pass(string $pass, string $id): bool
        {
            $db = $this->dbConnect();
            $queryUpdatePass = $db->prepare('UPDATE users SET pass = ? WHERE id = ?');

            return $queryUpdatePass->execute(array($pass, $id));
        }


        public function delete_account(string $id): bool
        {
            $db = $this->dbConnect();
            $queryDeleteAccount = $db->prepare('DELETE FROM users WHERE id = ?');

            return $queryDeleteAccount->execute(array($id));
        }

    }