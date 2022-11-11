<?php

    declare(strict_types = 1);

    namespace App\Model\Exceptions\Users;

    class ExceptionLogin extends \RuntimeException
    {
        public static function getErrorLogin(): string
        {
            return 'L\'email ou le mot de passe ne correspondent pas';
        }

    }