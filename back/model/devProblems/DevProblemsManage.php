<?php

    declare(strict_types = 1);

    namespace App\Model\DevProblems;

    use App\Model\Database\DbManage;


    class DevProblemsManage extends DbManage
    {
        /**
         * variable for number of screen by page
         */
        public static int $screen_by_page = 3;


        /**
         * variable which contain the current page.
         * To define it in the controller
         */
        public static $current_page = null;




        public function setProblem(string $user_id, string $author, string $language, string $description, string $name, int $size, string $type, string $screen): bool
        {
            $db = $this->dbConnect();
            $querySetProblem = $db->prepare('INSERT INTO f_screens(user_id, author, language, description, name, size, type, screen) VALUES(?, ?, ?, ?, ?, ?, ?, ?)');

            return $querySetProblem->execute(array($user_id, $author, $language, $description, $name, $size, $type, $screen));
        }


        public function getAllProblems(): array
        {
            $db = $this->dbConnect();
            $queryGetAllProblem = $db->prepare('SELECT * FROM f_screens ORDER by id DESC LIMIT '.getStartScreenPagination().', '.self::$screen_by_page);
            $queryGetAllProblem->execute(array());
            $get_allProblems = $queryGetAllProblem->fetchAll();

            if(count($get_allProblems) == 0) {
                header('Location: front/view/displayProblem.php');
            }

            return $get_allProblems;
        }


        public function getProblem(string $id)
        {
            $db = $this->dbConnect();
            $queryGetProblem = $db->prepare('SELECT * FROM f_screens WHERE id = ? ');
            $queryGetProblem->execute(array($id));

            return $queryGetProblem->fetch();
        }


        /**
         * pagination f_screens table
         */
        public function screenPagination()
        {
            $db = $this->dbConnect();
            $queryGetScreenPagination = $db->prepare('SELECT COUNT(*) as screens FROM f_screens');
            $queryGetScreenPagination->execute();
            $screen_counter = $queryGetScreenPagination->fetchAll();

            return $screen_counter[0]['screens'];
        }
    }

