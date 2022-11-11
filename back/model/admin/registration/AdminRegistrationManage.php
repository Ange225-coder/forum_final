<?php

    declare(strict_types = 1);

    namespace App\Model\Admin\Registration;

    use App\Model\Database\DbManage;

    class AdminRegistrationManage extends DbManage
    {
        /**
         * query for retrieve all username id db
        */
        public function checkingUsername(): array
        {
            $db = $this->dbConnect();
            $queryCheckingUsername = $db->prepare('SELECT * FROM f_admin');
            $queryCheckingUsername->execute(array());
            $checkUsername = $queryCheckingUsername->fetchAll();

            return $checkUsername;
        }

        public function insertAdmin(string $username, string $admin_password)
        {
            $db = $this->dbConnect();
            $password_hased = sha1($_POST['admin_password']);
            $queryInsertAdmin = $db->prepare('INSERT INTO f_admin(username, admin_password) VALUE(?, ?)');
            $newAdmin = $queryInsertAdmin->execute(array($username, $admin_password));

            return $newAdmin;
        }
    }