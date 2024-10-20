<?php
class ProductModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getProducts() {
        $query = $this->db->query("SELECT * FROM products");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // Nouvelle méthode pour récupérer un produit par son ID
    public function getProductById($id) {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>

