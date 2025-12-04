<?php
namespace App\Controller\Auth;
use App\Config\Database;

class Login{


    public function __construct(){
        $pdo = Database::getConnection();
    }
    public function index(){
        require_once __DIR__ . "/../../../views/pages/auth/Loginview.php";
    }
    public function Create(){
        
    }
}