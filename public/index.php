<?php
// public/index.php

// --- Global Setup ---
define('ACCESS_GRANTED', true);
session_start();

// --- Import Config & Core ---
require_once __DIR__ . '/../app/config/config.php';
require_once __DIR__ . '/../app/Config/Database.php';
require_once __DIR__ . '/../app/router/router.php';

// --- Import Controllers ---
// Add new controllers here as you create them
require_once __DIR__ . '/../app/controller/homeController.php';


// --- Init Router ---
$router = new Router();

// --- Define Routes ---

// Public Pages
$router->get('/',[HomeController::class, 'index']);


// --- Run Application ---
$router->resolve();
?>