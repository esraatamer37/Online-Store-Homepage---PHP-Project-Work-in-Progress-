<?php

include 'Store.php';
include 'Product.php';


$product1 = new Product("Product 1", "https://i.pinimg.com/564x/ee/5e/b5/ee5eb5ad84b05f0dcf9f359f9eef5cb2.jpg", 199);
$product2 = new Product("Product 2", "https://i.pinimg.com/564x/23/2d/3d/232d3dc900ca5bca2030652dac5f7b1c.jpg", 299);
$product3 = new Product("Product 3", "https://i.pinimg.com/736x/d4/f7/9a/d4f79a82c62b5a7ef779bdb22e4df6a2.jpg", 399);


$store = new Store("Electro Store",/*gh*/, "Find the best electronics here");


$store->addProduct($product1);
$store->addProduct($product2);
$store->addProduct($product3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($store->getName()); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
            position: relative;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        .search-bar {
            position: absolute;
            right: 15px;
            top: 15px;
        }
        .search-bar input[type="text"] {
            padding: 5px;
            border: none;
            border-radius: 5px;
            width: 200px;
        }
        .hero {
            background-color: #f4f4f4;
            padding: 30px;
            text-align: center;
        }
        .products {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }
        .product {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
            width: 30%;
            position: relative;
            overflow: hidden;
            height: 250px;
            box-sizing: border-box;
        }
        .product img {
            max-width: 100%;
            height: auto;
            cursor: pointer;
            transition: transform 0.3s ease, z-index 0.3s ease;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .product img.expand {
            transform: translate(-50%, -50%) scale(1.5);
            z-index: 10;
        }
        .product h3, .product p {
            margin: 10px 0;
            position: relative;
            z-index: 5;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($store->getName()); ?></h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
        </div>
    </header>

    <section class="hero">
        <h2>Welcome to <?php echo htmlspecialchars($store->getName()); ?></h2>
        <p><?php echo htmlspecialchars($store->getDescription()); ?></p>
    </section>

    <section class="products">
        <?php foreach ($store->getProducts() as $product): ?>
            <div class="product">
                <img src="<?php echo htmlspecialchars($product->getImage()); ?>" alt="<?php echo htmlspecialchars($product->getTitle()); ?>" onclick="toggleExpand(this)">
                <h3><?php echo htmlspecialchars($product->getTitle()); ?></h3>
                <p>$<?php echo htmlspecialchars($product->getPrice()); ?></p>
            </div>
        <?php endforeach; ?>
    </section>

    <footer>
        <p>&copy; Created by Esraa Tamer in 2024</p>
    </footer>

    <script>
        function toggleExpand(img) {
            if (img.classList.contains('expand')) {
                img.classList.remove('expand');
            } else {
                document.querySelectorAll('.product img').forEach(function(image) {
                    image.classList.remove('expand');
                });
                img.classList.add('expand');
            }
        }
    </script>
</body>
</html>
