<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
    <?php require 'views/header.php'?>
    <section>
        <h1 class="center">nuevo</h1>
        <form method="POST" action="<?php echo constant('URL');?>nuevo/registrarCliente">
            <p>
                <label for="nombre">nombre</label><br>
                <input type="text" name="nombre">
            </p>
            <p>
                <label for="apellidos">apellidos</label><br>
                <input type="text" name="apellidos">
            </p>
            <p>
                <label for="dni">dni</label><br>
                <input type="text" name="dni" maxlength="9">
            </p>
            <p>
                <label for="direccion">direccion</label><br>
                <input type="text" name="direccion">
            </p>
            <p>
                <label for="telefono">telefono</label><br>
                <input type="text" name="telefono" maxlength="9">
            <p>
            </p>
                <label for="email">email</label><br>
                <input type="email" name="email">
            </p>
            <p>
                <input type="submit" value="enviar">

            </p>
        </form>
    </section>

    <?php require 'views/footer.php'?>
</body>
</html>