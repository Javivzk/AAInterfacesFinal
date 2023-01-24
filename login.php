<?php
include './controller/session.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validar los campos
    $error = '';
    if (empty($username)) {
        $error = 'El nombre de usuario es requerido.';
    } else if (empty($password)) {
        $error = 'La contraseña es requerida.';
    } else {
        // Comprobar si el usuario existe en la base de datos
        if(isset($_POST['username'])&&($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            checkSession($username,$password);
        }
    }
}


?>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
<form method="post" action="">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <br>
    <?php if (!empty($error)) { ?>
        <div style="color: red;"><?php echo $error; ?></div>
    <?php } ?>
    <input type="submit" name="submit" value="Login">
</form>
</body>
</html>
