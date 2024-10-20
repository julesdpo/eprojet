<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Vérifier si le panier existe dans la session
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];  // Initialiser le panier comme un tableau
    }

    // Initialiser un produit avec sa quantité
    $cart_item = [
        'id' => $product_id,
        'name' => $product_name,
        'price' => $product_price,
        'quantity' => 1,
    ];

    // Vérifier si le produit existe déjà dans le panier
    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $product_id) {
            $item['quantity']++;  // Augmenter la quantité si le produit est déjà dans le panier
            $found = true;
            break;
        }
    }

    if (!$found) {
        // Si le produit n'est pas déjà dans le panier, l'ajouter
        $_SESSION['cart'][] = $cart_item;
    }

    // Rediriger vers la page du panier
    header('Location: /eprojet/public/cart.php');
    exit;
}
?>
