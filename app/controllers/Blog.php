<?php

    class Blog extends Controller {

        public function __construct() {
            $this->posts = $this->model('Blog_');
        }

        public function index() {

            $data = [

                'posts' => $this->posts->getAllPosts()

            ];

            $this->view('blog/index', $data);

        }

    }

?>