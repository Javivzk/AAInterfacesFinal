<?php
require_once '../model/Product.php';
  session_start();
  $expire = time() + (30 * 60); // 30 minutos en segundos
  setcookie("nombre_cookie", "valor_cookie", $expire);

if(isset($_SESSION['username'])){
  }

// Incluimos el fichero saludar.php
include 'saludar.php';
// Imprimimos el saludo a traves de una función que esta dentro del fichero saludar

?>
<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" href="../css/style.css">
      <title>Página de inicio</title>
  </head>
  <body>
    <h1><?php echo saludar('Bienvenido');echo $_SESSION['username']; ?></h1>
<nav>
    <a href="header.php">Inicio</a> |
    <a href="busqueda.php">Catálogo</a> |
    <a href="cart.php">Carrito</a> |
    <a href="break.php">Break</a> |
    <a href="continue.php">Continue</a> |
    <a href="do_while_combustible.php">Do While</a> |
    <a href="for_tabla_multiplicar.php">For</a> |
    <a href="edad_switch.php">Switch</a> |
    <a href="while_1a100.php">While</a> |






    <a href="logout.php">Cerrar sesión</a>
</nav>
<h2>Productos recientes</h2>
<?php
$recent_products = array(
    new Product('Product 1', 10, '/img/product1.jpg', '2022-01-01'),
    new Product('Product 2', 20, '/img/product2.jpg', '2022-02-01'),
    new Product('Product 3', 30, '/img/product3.jpg', '2022-03-01'),
    new Product('Product 4', 40, '/img/product4.jpg', '2022-05-01'),
    new Product('Product 5', 50, '/img/product5.jpg', '2022-05-02')
);
// Ordenar los productos recientes por fecha
usort($recent_products, function ($item1, $item2) {
    return $item2->getDateAdded() <=> $item1->getDateAdded();
});
// Mostrar los productos recientes
echo "<ul>";
foreach ($recent_products as $product) {
    echo "<li> <h3>".$product->getName()."</h3> <p>Precio: ".$product->getPrice()."</p> <img src='".$product->getImage()."' alt='".$product->getName()."' width='200'> </li>";
}
echo "</ul>";



