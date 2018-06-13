<?php 

    class Staff_ {

        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getAllPeople() {

            $this->db->query("SELECT * FROM tbl_staff");
            return $this->db->resultSet();

        }

    }

?>