<?php
namespace App\Controller\Auth;
use App\Config\Database;

use App\Models\User;
class Register{

    private $pdo;
    public function __construct(){
       $this->pdo = Database::getConnection();
    }
    public function index(){
       $errors = [];
       $old = [];
        require_once __DIR__ . '/../../../views/pages/auth/Registerview.php';
    }
    public function create(){
        //get the data//
        $username = $_POST['username'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $confirmPassword = $_POST['confirmPassword'] ?? '';
        $errors = [];

        //validate username
        if(empty(trim($username))){
            $errors['username'] = "User name is required.";    
        }elseif(strlen(trim($username))< 3){
            $errors['username'] = "Username must be at least 3 characters.";    
        }
        //validate email
        if (empty(trim($email))) {
            $errors['email'] = 'Email is required.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Invalid email format.';
        }

        //validate password//
        if (empty(trim($password))) {
            $errors['password'] = 'Password is required.';
        }elseif (strlen(trim($password)) < 6) {
            $errors['password'] = 'Password must be at least 6 characters.';
        }elseif($password != $confirmPassword){
            $errors['password'] = 'Password dont match';
        }

        if (!empty($errors)) {
            // Pass the "Old" input back so the user doesn't have to retype
            $old = [
                'username' => $username,
                'email' => $email
            ];
            
            // Re-load the view (The view will use $errors and $old variables)
            require_once __DIR__ . '/../../../views/pages/auth/Registerview.php';
            return; // Stop execution
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $usermodel = new User($this->pdo);
        $saved = $usermodel->registerUser($username,$email,$hashedPassword);
        header('Location: /roomreservation/public/');
        exit;
    }
}