<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center text-green-600 mb-10">Your Cart</h1>
        
        <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
            <div class="grid grid-cols-1 gap-6">
                <?php 
                $total_price = 0;  // Initialiser le total général
                foreach ($_SESSION['cart'] as $item): 
                    $total_price += $item['price'] * $item['quantity'];  // Calculer le total général
                ?>
                    <div class="bg-white rounded-lg shadow-lg p-4">
                        <h2 class="text-xl font-semibold"><?php echo $item['name']; ?></h2>
                        <p class="text-gray-700">Price: <?php echo $item['price']; ?>€</p>
                        <p class="text-gray-700">Quantity: <?php echo $item['quantity']; ?></p>
                        <p class="text-gray-900 font-bold">Total: <?php echo $item['price'] * $item['quantity']; ?>€</p>

                        <!-- Formulaire pour supprimer un produit -->
                        <form action="/eprojet/public/remove_from_cart.php" method="post" class="mt-2">
                            <input type="hidden" name="product_id" value="<?php echo $item['id']; ?>">
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                                Supprimer
                            </button>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Affichage du total général -->
            <div class="text-right mt-6">
                <h3 class="text-2xl font-bold">Total général: <?php echo $total_price; ?>€</h3>
            </div>

            <!-- Boutons de navigation -->
            <div class="mt-6 flex justify-between">
                
                <a href="/eprojet/public/" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Continue Shopping</a>
                <a href="/eprojet/public/checkout.html" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Proceed to Checkout</a>
            </div>
        <?php else: ?>
            <p class="text-center text-gray-600">Your cart is empty.</p>
            <a href="/eprojet/public/" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Continue Shopping</a>
        <?php endif; ?>
        
    </div>
</body>
</html>
