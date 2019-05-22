<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="<?php echo constant('URL');?>public/js/llamadaAjax.js"></script>
</head>
<body>
    <?php require 'views/header.php'?>
    <section>
        <h1 class="center">GESTION DE PRODUCTOS</h1>
        <div class="table-responsive">
        <table class="table table-striped text-center table-sm">
            <thead>
                <tr>
                    <th scope="col">nombre</th>
                    <th scope="col">codigo</th>
                    <th scope="col">descripcion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
                    include_once 'models/producto.php';
                    foreach($this->productos as $row){
                        $producto = new producto();
                        $producto = $row;
                ?>
                    <td><?php echo $producto->nombre ?></td>
                    <td><?php echo $producto->codigo ?></td>
                    <td><?php echo $producto->descripcion ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
                    </div>
        <div class="mensaje text-center"></div>
        <div class="center"><?php echo $this->mensaje; ?></div>
        <div class="posicion-botones">
            <input type="button" class="btn btn-primary col-lg-5 col-xs-12 boton" value="registrar productos" id="btn-ajax">
            <input type="button" class="btn btn-primary col-lg-5 col-lg-offset-1 col-xs-12 boton" value="ordenar por codigo" id="btn-ordenacion">
        </div>
        
        
    </section>

    <?php require 'views/footer.php'?>
</body>
</html>