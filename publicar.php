<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>The Glam App</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="publicar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <script src="js/jquery.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
</head>

<body>
    <!--Menu lateral-->
    <header class="header">

        <!-- Mensaje de notificación -->
        <div class="message" id="mensaje">
            <?php if (isset($_SESSION['success'])): ?>
                <div class="error success">
                    <h3>
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>
        </div>
        <!-- Fin Mensaje de notificación -->
        <div class="container">
            <div class="btn-menu">
                <label for="btn-menu">☰</label>
            </div>
            <div class="logo">
                <a href="Principal.php" style="text-decoration: none; color: #fff;">
                    <h1 id="Nombre">The Glam App</h1>
                </a>
            </div>
            <nav class="menu">
                <a href="index.php"><a href="index.php" style="text-decoration: none; color: #fff;">Perfil</a>
                </a>
            </nav>
        </div>
        <!--Fin Menu lateral-->

        <header>

            <form action="publish.php" method="POST" enctype="multipart/form-data">
                <div id="ImagenP">
                    <br>
                    <h1>Imagen</h1>
                    <div id="cuadroImagen">
                        <input type="file" id="imagenProducto" name="imagenProducto" accept="image/*">
                        <label for="imagenProducto" id="labelImagen">
                            <i class="fas fa-image" id="iconoImagen"></i>
                        </label>
                    </div>
                </div>

                <br>

                <div id="descripcionProducto">
                    <h2>Descripción</h2><br><br>
                    <textarea id="txtDescripcion" name="descripcion" rows="6"
                        placeholder="Ingrese una descripción"></textarea>
                </div>

                <button id="realizarButton" type="submit">Publicar</button>
            </form>

            <!--Menu Lateral--------------->
            <input type="checkbox" id="btn-menu">
            <div class="container-menu">
                <div class="cont-menu">
                    <nav>
                        <a href="#">Citas</a>
                        <a href="#">Carrito</a>
                        <a href="#">Tipo de Rostro</a>
                        <a href="#">Color de Cabello</a>
                        <a href="#">Preguntas</a>
                        <a href="publicar.php">Publicar</a>
                        <a href="#">Acerca De</a>
                    </nav>
                    <label for="btn-menu">✖️</label>
                </div>
            </div>

        </header>
        <!---Fin de Barra de busqueda--->

        <script src="js/image.js"></script>
</body>