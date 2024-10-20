<?php
class ProductController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function displayProducts() {
        $products = $this->model->getProducts();
        include __DIR__ . '/../view/products.php';
    }
}
?>