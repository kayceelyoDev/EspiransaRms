<?php

require_once __DIR__ . '/../config/database.php';

Class HomeController {
    public function index(){
        require_once __DIR__ . "/../../views/pages/home.php";
    }
}