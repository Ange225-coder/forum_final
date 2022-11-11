<?php

    declare(strict_types = 1);

    namespace App\Model\Admin\Login;

    use App\Model\Admin\Registration\AdminRegistrationManage;

    class AdminLoginManage extends AdminRegistrationManage
    {
        public function getUsername(): array
        {
            return $this->checkingUsername();
        }
    }