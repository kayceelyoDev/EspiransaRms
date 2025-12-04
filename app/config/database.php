<?php
if (!defined('ACCESS_GRANTED')) {
    http_response_code(403); // Send "Forbidden" status

    exit(require_once __DIR__ . '/../../views/pages/404.php');   // Kill the script
}
class Database {
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
            $this->conn = new PDO($dsn, DB_USER, DB_PASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>