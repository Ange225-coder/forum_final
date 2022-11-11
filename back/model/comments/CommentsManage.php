<?php

    declare(strict_types = 1);

    namespace App\Model\Comments;
    
    use App\Model\Database\DbManage;

    class CommentsManage extends DbManage
    {

        /**
         * query to display a post 
         * based on its id
        */
        public function getPost(string $idPost): array
        {
            $db = $this->dbConnect();
            $queryGetPost = $db->prepare('SELECT * FROM f_subject WHERE id = ?');
            $queryGetPost->execute(array($idPost));

            return $queryGetPost->fetch();
        }

        /**
         * query to insert new comment on a post
         * based on its id
        */
        public function insertComments(string $idPost, string $author, string $comment): bool
        {
            $db = $this->dbConnect();
            $queryInsertCom = $db->prepare('INSERT INTO f_comments(id_post, author, comment, date_comment) VALUES(?, ?, ?, NOW())');

            return $queryInsertCom->execute(array($idPost, $author, $comment));
        }

        /**
         * query to get comments on a post
         * based on its id
        */
        public function getComments($idPost)
        {
            $db = $this->dbConnect();
            $queryGetComment = $db->prepare('SELECT *, DATE_FORMAT(date_comment, "%d/%m/%Y à %Hh:%imin:%ss") as dateComFr FROM f_comments WHERE id_post = ? ORDER BY date_comment DESC');
            $queryGetComment->execute(array($idPost));
            $reading_com = $queryGetComment->fetchAll();

            return $reading_com;
        }


        /**
         * query to get comment based
         * on its id
         */
        public function get_comment(string $idCom)
        {
            $db = $this->dbConnect();
            $query_get_comment = $db->prepare('SELECT * FROM f_comments WHERE id = ?');
            $query_get_comment->execute(array($idCom));

            return $query_get_comment->fetch();
        }


        /**
         * Query to set user response
         * on a post comment
         */
        public function setResponse(string $id_post, string $id_com, string $author, string $comment, string $response): bool
        {
            $db = $this->dbConnect();
            $querySetResponse = $db->prepare('INSERT INTO f_respondcom(id_post, id_com, author, comment, response, date_responseCom) VALUES(?, ?, ?, ?, ?, NOW())');

            return $querySetResponse->execute(array($id_post, $id_com, $author, $comment, $response));
        }


        /**
         * Query to get comments responses
         */
        public function getCommentResponses(string $idCom): array
        {
            $db = $this->dbConnect();
            $queryGetCommentResponse = $db->prepare('SELECT * FROM f_respondcom WHERE id_com = ? ORDER BY date_responseCom DESC');
            $queryGetCommentResponse->execute(array($idCom));

            return $queryGetCommentResponse->fetchAll();
        }
    }