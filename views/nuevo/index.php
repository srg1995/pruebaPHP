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
        <form method="POST" action="<?php echo constant('URL');?>nuevo/registrarAlumno">
            <p>
                <label for="matriula">Mtricula</label><br>
                <input type="text" name="matricula">
            </p>
            </p>
                <label for="nombre">nombre</label><br>
                <input type="text" name="nombre">
            <p>
            </p>
                <label for="appelidos">appelidos</label><br>
                <input type="text" name="apellidos">
            <p>
                <input type="submit" value="enviar">

            </p>
        </form>
    </section>

    <?php require 'views/footer.php'?>
</body>
</html>