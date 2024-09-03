<?php
class Product {
    private $title;
    private $image;
    private $price;

    // Constructor
    public function __construct($title, $image, $price) {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
    }

    // Getters
    public function getTitle() {
        return $this->title;
    }

    public function getImage() {
        return $this->image;
    }

    public function getPrice() {
        return $this->price;
    }
}
?>
