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
        <h1 class="center">INSERTAR NUEVO CLIENTE</h1>
        <div class="center"><?php echo $this->mensaje; ?></div>
        <form method="POST" action="<?php echo constant('URL');?>nuevo/registrarCliente">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Nombre" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" placeholder="Apellidos" required>
            </div>

            <div class="form-group">
                <label for="dni">Dni</label>
                <input type="text" class="form-control" placeholder="Dni" required>
            </div>

            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" class="form-control" placeholder="Direccion" required>
            </div>

            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="number" class="form-control" placeholder="Telefono" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Email" required>
            </div>

            <button type="submit" class="btn btn-outline-success">Registrar cliente</button>
        </form>

    </section>

    <?php require 'views/footer.php'?>
</body>
</html>