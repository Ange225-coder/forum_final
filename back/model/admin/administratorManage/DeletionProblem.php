<?php

    declare(strict_types = 1);

    namespace App\Model\Admin\AdministratorManage;

    use App\Model\Database\DbManage;

    class DeletionProblem extends DbManage
    {
        public function getProblemId(string $id)
        {
            $db = $this->Dbconnect();
            $queryGetProblemId = $db->prepare('SELECT * FROM f_screens WHERE id = ?');
            $queryGetProblemId->execute(array($id));

            return $queryGetProblemId->fetch();
        }


        public function deleteProblem(string $id): bool
        {
            $db = $this->dbConnect();
            $queryDelProblem = $db->prepare('DELETE FROM f_screens WHERE id = ?');

            return $queryDelProblem->execute(array($id));
        }
    }