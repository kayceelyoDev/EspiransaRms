<?php
namespace App\Controller\Auth;

use App\Config\Database;
use App\Models\User;

class Login {
    
    private $pdo;

    public function __construct() {
        $this->pdo = Database::getConnection();
    }

    public function index() {
        $errors = [];
        $old = [];
        require_once __DIR__ . "/../../../views/pages/auth/Loginview.php";
    }

    public function login() {
      
        $errors = [];
        $old = $_POST; 

        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

     
        if (empty(trim($email))) {
            $errors['email'] = 'Email is required.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Invalid email format.';
        }

        if (empty(trim($password))) {
            $errors['password'] = 'Password is required.';
        }

       
        if (!empty($errors)) {
            // Re-load the view so the user sees the errors
            require_once __DIR__ . "/../../../views/pages/auth/Loginview.php";
            return; 
        }


        $model = new User($this->pdo);
        $user = $model->findEmail($email);

        // 3. Verify Password
      
        if ($user && password_verify($password, $user['password_hash'])) {
            
            // Security: Prevent session fixation
            session_regenerate_id(true);

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];

            header("Location: /dashboard"); // Use absolute path with /
            exit;
        } else {
            // Login failed
            $errors['email'] = 'Invalid Credentials'; // Generic error message
            
          
            require_once __DIR__ . "/../../../views/pages/auth/Loginview.php";
        }
    }
}