<?php
require_once '../model/Cart.php';
require_once '../model/Product.php';
require_once 'cart.php';


// Crear una instancia de la clase cart
$cart = new cart();
// Obtener el nombre y precio del producto a partir de los datos enviados en la petición
$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];
$productImage = $_POST['productImage'];
$productDate = $_POST['productDate'];

// Crear una instancia de la clase Product con los datos del producto
$product = new Product($productName, $productPrice,$productImage,$productDate);
// Añadir el producto al carrito
$cart->addItem($product);
// Redirigir al usuario de vuelta al carrito
header('Location: cart.php');
exit;
?>
