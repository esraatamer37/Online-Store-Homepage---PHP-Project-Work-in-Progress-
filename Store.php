<?php
class Store {
    private $name;
    private $image;
    private $description;
    private $products = array(); // Array of Product objects

    // Constructor
    public function __construct($name, $image, $description) {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
    }

    // Getters
    public function getName() {
        return $this->name;
    }

    public function getImage() {
        return $this->image;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getProducts() {
        return $this->products;
    }

    public function addProduct($product) {
        $this->products[] = $product;
    }
}
?>
