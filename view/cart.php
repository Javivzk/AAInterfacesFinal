<div class="cart-page">
    <link rel="stylesheet" href="../css/style.css">
    <h1>Carrito de compras</h1>
    <table>
        <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            <th>Acción</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Product 1</td>
            <td>$10</td>
            <td>
                <form>
                    <input type="number" value="1">
                    <button>Actualizar</button>
                </form>
            </td>
            <td>$10</td>
            <td><a href="#">Eliminar</a></td>
        </tr>
        <tr>
            <td>Product 2</td>
            <td>$20</td>
            <td>
                <form>
                    <input type="number" value="1">
                    <button>Actualizar</button>
                </form>
            </td>
            <td>$20</td>
            <td><a href="#">Eliminar</a></td>
        </tr>
        </tbody>
    </table>
    <div class="total">
        <p>Total: $30</p>
        <button onclick="sendPaymentEmail()">Proceder al pago</button>    </div>
</div>
<footer>
    <p><a href="header.php">Volver al index.</a></p>
</footer>
