<?php
    class Pages extends Controller {
        public function __construct() {
            
        }

        public function index() {
            $data = 
                [
                    'title' => 'Shareposts',
                    'description' => 'Simple Social Network built on the PHP-MVC framework'
                ];      
            $this->view('pages/index', $data);
        }

        public function about() {
            $data = 
                [
                    'title' => 'About',
                    'description' => 'App to share posts with other users'
                ];
            $this->view('pages/about', $data);
        }
    }