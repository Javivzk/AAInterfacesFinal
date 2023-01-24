<?php
// Crear un arreglo con los productos
$products = array(
    array('name' => 'Product 1', 'price' => 10, 'description' => 'Lorem ipsum dolor sit amet'),
    array('name' => 'Product 2', 'price' => 20, 'description' => 'Consectetur adipiscing elit'),
    array('name' => 'Product 3', 'price' => 30, 'description' => 'Sed do eiusmod tempor incididunt'),
    array('name' => 'Product 4', 'price' => 40, 'description' => 'ut labore et dolore magna aliqua'),
    array('name' => 'Product 5', 'price' => 50, 'description' => 'Nibh tellus molestie nunc non')
);
$search_term = strtolower($_GET['searchTerm']);
// Mostrar los resultados
echo "<table>";
echo "<tr> <th>Nombre</th> <th>Precio</th> <th>Descripcion</th> <th>Añadir al carrito</th> </tr>";
foreach ($products as $product) {
    if (strpos(strtolower($product['name']),$search_term) !== false || strpos(strtolower($product['description']),$search_term) !== false) {
        echo "<tr> <td>{$product['name']}</td> <td>{$product['price']}</td><td>{$product['description']}</td> <td> <form action='add_to_cart.php' method='POST'> <input type='hidden' name='productName' value='{$product['name']}'> <input type='hidden' name='productPrice' value='{$product['price']}'> <input type='submit' value='Añadir al carrito'> </form> </td> </tr>";
    }
}
echo "</table>";
?>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Resultados</title>
</head>
<footer>
    <p><a href="header.php">Volver al index.</a></p>
</footer>

