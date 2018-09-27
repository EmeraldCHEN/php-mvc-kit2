<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class OneStaff extends Controller {

        public function __construct() {
            $this->onestaff = $this->model('OneStaff_');
        }

        public function index() {

            $id = myTryParse(URLROOT);
            
            $person = $this->onestaff->getSinglePerson($id);

            $data = [
                'onestaff' => $person
            ];

            $this->view('onestaff/index', $data);
        }
    }
?>