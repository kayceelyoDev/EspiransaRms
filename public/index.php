<?php

use App\Controller\Auth\Register;
use App\Controller\Auth\Login;
use App\Controller\test\test_config;
use App\Controller\HomeController; 
// public/index.php

// --- Global Setup ---
define('ACCESS_GRANTED', true);
session_start();

// --- 1. CONFIG & HELPER IMPORTS ---
require_once __DIR__ . '/../app/config/config.php';
require_once __DIR__ . '/../app/Config/Database.php';
require_once __DIR__ . '/../app/router/router.php'; // Note: Ensure filename casing matches (Router.php vs router.php)

// --- 2. AUTOLOADER (The Fix) ---
// This automatically loads classes based on their Namespace
spl_autoload_register(function ($class) {
    // Define the base directory for the namespace prefix 'App\'
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/../app/';

    // Does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    // Get the relative class name
    $relative_class = substr($class, $len);

    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // If the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});

// --- Import Controllers ---
// MAKE SURE these match the actual namespace inside the controller files



// --- Init Router ---
$router = new Router();

// --- Define Routes ---
$router->get('/', [HomeController::class, 'index']);
$router->get('/test', [test_config::class, 'test']);

//auth route//
$router->get('/login',[Login::class,'index']);
$router->post('/loginUser', [Login::class,'login']);

$router->get('/register',[Register::class, 'index']);
$router->post('/regUser', [Register::class,'create']);


// --- Run Application ---
$router->resolve();
?>