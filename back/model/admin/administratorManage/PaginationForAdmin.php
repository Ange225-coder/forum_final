<?php

    declare(strict_types = 1);

    namespace App\Model\Admin\AdministratorManage;

    use App\Model\Database\DbManage;

    class PaginationForAdmin extends DbManage
    {

        /** variable which manage number of users by page */
        public static int $user_par_page = 3;

        /** variable which manage number of topics by page */
        public static int $topic_par_page = 2;


        /** variable which manage number of comments by page */
        public static int $comment_par_page = 2;


        /**
         * variable which contain the current page.
         * To define it in the controller
         */
        public static $current_page = null;



        /**
         * pagination for users table
         */
        public function getUsersPagination()
        {
            $db = $this->dbConnect();
            $queryUserPagination = $db->prepare('SELECT COUNT(*) as user FROM users');
            $queryUserPagination->execute();
            $user_counter = $queryUserPagination->fetchAll();

            return $user_counter[0]['user'];
        }

        /**
         * pagination for topics tables
         */
        public function getTopicsPagination()
        {
            $db = $this->dbConnect();
            $queryTopicPagination = $db->prepare('SELECT COUNT(*) as topics FROM f_subject');
            $queryTopicPagination->execute();
            $topic_counter = $queryTopicPagination->fetchAll();

            return$topic_counter[0]['topics'];
        }

        /**
         * pagination for comments
         */
        public function getCommentsPagination()
        {
            $db = $this->dbConnect();
            $queryCommentPagination = $db->prepare('SELECT COUNT(*) as comments FROM f_comments');
            $queryCommentPagination->execute();
            $comment_counter = $queryCommentPagination->fetchAll();

            return $comment_counter[0]['comments'];
        }

    }
