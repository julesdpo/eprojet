<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/eprojet/public/js/script.js"></script>
</head>
<body class="bg-gray-100">
<div class="container mx-auto px-4 py-8">
        <!-- Bouton de panier en haut de la page -->
        <div class="flex justify-end mb-6">
            <a href="/eprojet/public/cart.php" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                Voir le Panier
                <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
                    <span class="ml-2">(<?php echo count($_SESSION['cart']); ?>)</span>
                <?php endif; ?>
            </a>
        </div>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center text-green-600 mb-10">Our Products</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php foreach ($products as $product): ?>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <!-- Afficher l'image du produit -->
                <img src="/eprojet/public/images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="w-full h-48 object-cover">
                
                <!-- Informations sur le produit -->
                <div class="p-4">
                    <a href="/product.php?id=<?php echo $product['id']; ?>" class="text-xl font-semibold text-gray-800 hover:text-green-600 block">
                        <?php echo $product['name']; ?>
                    </a>
                    <span class="text-gray-600 text-lg block mb-2"><?php echo $product['price']; ?>€</span>
                    
                    <a href="/eprojet/public/product.php?id=<?php echo $product['id']; ?>" class="mt-2 inline-block bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                        View Product
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
