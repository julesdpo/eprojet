<?php
function getDBConnection() {
    try {
        return new PDO('mysql:host=localhost;dbname=ecommerce', 'root', 'root');
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        exit;
    }
}
?>