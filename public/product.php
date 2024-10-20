<?php
session_start();
// Connexion à la base de données
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../model/ProductModel.php';

$db = getDBConnection(); 

// Initialiser le modèle
$model = new ProductModel($db);

// Récupérer l'ID du produit via l'URL
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Récupérer les informations du produit depuis le modèle
$product = $model->getProductById($product_id);

// Vérifier si le produit existe
if (!$product) {
    echo "<h1>Product not found</h1>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $product['name']; ?> - Product Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <!-- Page de détails du produit -->
        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="/eprojet/public/images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="w-full h-64 object-cover">
            <div class="p-6">
    <h1 class="text-3xl font-bold mb-4"><?php echo $product['name']; ?></h1>
    <p class="text-gray-700 text-lg mb-4"><?php echo $product['description']; ?></p>
    <span class="text-2xl font-semibold text-green-600 mb-4 block"><?php echo $product['price']; ?>€</span>
    
    <!-- Formulaire pour ajouter au panier -->
    <form action="/eprojet/public/add_to_cart.php" method="post">
        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
        <input type="hidden" name="product_name" value="<?php echo $product['name']; ?>">
        <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-600">Ajouter au panier</button>
    </form>

    <a href="/eprojet/public/" class="inline-block bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 mt-4">Back to Products</a>
</div>

            
        </div>
    </div>
</body>
</html>
