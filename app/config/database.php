<?php
namespace App\Config;
use PDO;
if (!defined('ACCESS_GRANTED')) {
    http_response_code(403); // Send "Forbidden" status

    exit(require_once __DIR__ . '/../../views/pages/404.php');   // Kill the script
}
class Database {
    
    public $conn;

    public static function getConnection() {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
        return new PDO($dsn, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
}
?>