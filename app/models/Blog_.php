<?php

    class Blog_ {

        private $db;

        public function __construct() {
            $this->db = new DataBase;
        }

        public function getAllPosts() {
            $this->db->query("SELECT * FROM tbl_posts");
            return $this->db->resultSet();
        }

    }

?>