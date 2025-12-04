<?php
    namespace App\Models;
    use PDO;
    Class User{
        private $pdo;
        public function __construct(PDO $pdo){
            $this->pdo = $pdo;
        }

        public function registerUser($username,$email,$password){
            $stmt = $this->pdo->prepare("INSERT INTO users(username,email,password_hash) VALUES(:username,:email,:password)");
            return $stmt->execute([
            ':username' => $username,
            ':email'    => $email,
            ':password' => $password
        ]);
        }
    }
