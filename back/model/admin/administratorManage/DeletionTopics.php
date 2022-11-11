<?php

    declare(strict_types = 1);

    namespace App\Model\Admin\AdministratorManage;

    use App\Model\Database\DbManage;

    class DeletionTopics extends DbManage
    {
        /** get topics bases on its id */
        public function getTopicId(string $id): array
        {
            $db = $this->dbConnect();
            $queryGetTopicId = $db->prepare('SELECT * FROM f_subject WHERE id = ?');
            $queryGetTopicId->execute(array($id));
            $get_topic_id = $queryGetTopicId->fetch();

            return $get_topic_id;
        }

        /**
         *function which ddelete topic based on
         *its id
         */
        public function delete_topic(string $id): bool
        {
            $db = $this->dbConnect();
            $queryDel_topic = $db->prepare('DELETE FROM f_subject WHERE id = ?');
            $delete_topic = $queryDel_topic->execute(array($id));

            return $delete_topic;
        }
    }