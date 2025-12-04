<?php
namespace App\Controller;


Class HomeController {
    public function index(){
        require_once __DIR__ . "/../../views/pages/home.php";
    }
}