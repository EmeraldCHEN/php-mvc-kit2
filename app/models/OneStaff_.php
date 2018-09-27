<?php 
    class OneStaff_ {

        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getSinglePerson($id) {

            $this->db->query("SELECT * FROM tbl_staff WHERE id = :id");
            $this->db->bind(":id", $id);
            return $this->db->resultSet();

        }
    }
?>