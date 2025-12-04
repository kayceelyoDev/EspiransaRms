<?php
// app/Core/Router.php

class Router {
    protected $routes = [];

    // Register GET route
    public function get($path, $callback) {
        $this->routes['GET'][$path] = $callback;
    }

    // Register POST route
    public function post($path, $callback) {
        $this->routes['POST'][$path] = $callback;
    }

    // Handle Request
    public function resolve() {
        // 1. Get the full URL path (e.g., /room-reservation/public/home)
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        // 2. Clean up query strings (remove ?id=1, etc.)
        $position = strpos($path, '?');
        if ($position !== false) {
            $path = substr($path, 0, $position);
        }

        $scriptName = $_SERVER['SCRIPT_NAME'];
        $projectPath = dirname($scriptName);

       
        // This ensures the slashes always match the browser URL
        $projectPath = str_replace('\\', '/', $projectPath);

       
        // If URL is "/room-reservation/public/home", this leaves "/home"
        if ($projectPath !== '/' && strpos($path, $projectPath) === 0) {
            $path = substr($path, strlen($projectPath));
        }

        // 5. Default to slash if empty
        if ($path === '') {
            $path = '/';
        }

     
        $method = $_SERVER['REQUEST_METHOD'];
        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false) {
            http_response_code(404);
            require_once __DIR__ . "/../../views/pages/404.php";
            return;
        }

        $controller = new $callback[0]();
        call_user_func([$controller, $callback[1]]);
    }
}
?>