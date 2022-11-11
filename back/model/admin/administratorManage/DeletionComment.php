<?php

    declare(strict_types = 1);

    namespace App\Model\Admin\AdministratorManage;

    use App\Model\Database\DbManage;

    class DeletionComment extends DbManage
    {
        public function getCommentId(string $id): array
        {
            $db = $this->dbConnect();
            $queryGetCommentId = $db->prepare('SELECT * FROM f_comments WHERE id = ?');
            $queryGetCommentId->execute(array($id));

            return $queryGetCommentId->fetch();
        }

        public function delete_comment(string $id): bool
        {
            $db = $this->dbConnect();
            $queryDelete_comment = $db->prepare('DELETE FROM f_comments WHERE id = ?');

            return $queryDelete_comment->execute(array($id));
        }
    }