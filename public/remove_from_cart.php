<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];

    // Vérifier si le panier existe dans la session
    if (isset($_SESSION['cart'])) {
        // Parcourir le panier pour trouver le produit à supprimer
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['id'] == $product_id) {
                unset($_SESSION['cart'][$key]);  // Supprimer l'élément du panier
                break;
            }
        }
    }
}

// Rediriger vers la page du panier après suppression
header('Location: /eprojet/public/cart.php');
exit;
?>
