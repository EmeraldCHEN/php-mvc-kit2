<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class Staff extends Controller {

        public function __construct() {
            $this->mystaff = $this->model('Staff_');
        }

        public function index() {
            
            $people = $this->mystaff->getAllPeople();

            $data = [
                'staff' => $people
            ];

            $this->view('staff/index', $data);
        }
    }
?>