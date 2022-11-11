<?php

    declare(strict_types = 1);

    namespace App\Model\Users\Login;

    use App\Model\Users\Registration\UserRegistrationManage;

    class UserLoginManage extends UserRegistrationManage
    {
        public function getLoginUser(): array
        {
           return $this->checkingEmail();
        }
    }