<?php

    declare(strict_types = 1);

    namespace App\Model\Topics;

    use App\Model\Database\DbManage;

    class TopicsManage extends DbManage
    {
        /**
         * variable for searching
         * this variable will allow to display
         * search result if == true
         */
        public static string $display_result_search = 'oui';


        /**
         * query to insert new topic in db
        */

        public function insertNewTopic($author, $topic, $description): bool
        {
            $db = $this->dbConnect();
            $queryInsertTopic = $db->prepare('INSERT INTO f_subject(author, topic, describtion, date_added) VALUES(?, ?, ?, NOW())');

            return $queryInsertTopic->execute(array($author, $topic, $description));
        }

        /**
         * query to retrieve all elements
         * into the table subject for reading 
        */

        public function readTopic(): array
        {
            $db = $this->dbConnect();
            $queryReadTopic = $db->prepare('SELECT *, DATE_FORMAT(date_added, "%d/%m/%Y à %Hh:%imin:%ss") as dateFr FROM f_subject ORDER BY date_added DESC');
            $queryReadTopic->execute();

            return $queryReadTopic->fetchAll();
        }


        /**
         * query to do search
         */

        public function setSearch(string $keyword): array
        {
            $db = $this->dbConnect();
            $querySearch = $db->prepare("SELECT * FROM f_subject WHERE topic LIKE '%?%' ");
            $querySearch->execute(array($keyword));

            return $querySearch->fetchAll();
        }

    }