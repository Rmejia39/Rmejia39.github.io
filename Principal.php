<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>The Glam App</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

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
            </nav>
        </div>
        <!--Fin Menu lateral-->

        <header>
            <!--Barra de busqueda -->
            <input type="search" id="input-search" placeholder="Buscar aqui">
            <div class="content-search">
                <div class="content-table">
                    <table id="table">
                        <thead>
                            <tr>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">Inicio</a></td>
                            </tr>

                            <tr>
                                <td><a href="/index.php">Perfil</a></td>
                            </tr>

                            <tr>
                                <td><a href="/Calendariocitas/index.php">Citas</a></td>
                            </tr>

                            <tr>
                                <td><a href="Carrito.html">Carrito</a></td>
                            </tr>

                            <tr>
                                <td><a href="TipoRostro.html">Tipo de rostro</a></td>
                            </tr>

                            <tr>
                                <td><a href="ColorCabello.html">Color de cabello</a></td>
                            </tr>

                            <tr>
                                <td><a href="Encuesta.html">Encuesta de satisfaccion</a></td>
                            </tr>

                            <tr>
                                <td><a href="Acerca De.html">Acerca De</a></td>
                            </tr>

                            <tr>
                                <td><a href="/Lista/citas.php">Listado de citas</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <br>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "project";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            $sql = "SELECT id_p, imagen, descripcion, fecha_registro FROM publicaciones";
            $sql = "SELECT * FROM publicaciones ORDER BY fecha_registro DESC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo '<div class="card-container">';
                while ($row = $result->fetch_assoc()) {
                    echo '<br>';
                    echo '<div class="card">';
                    echo '<div class="card-content">';
                    echo '<img src="data:image/jpeg;base64,' . $row['imagen'] . '" alt="Imagen del producto">';
                    echo '<p>"Usuario": <span data-id="' . $row['id_p'] . '">' . $row['descripcion'] . '</span></p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p class="text-center">No se encontraron publicaciones.</p>';
            }
            echo '</div>';

            $conn->close();
            ?>


            <!--Menu Lateral--------------->
            <input type="checkbox" id="btn-menu">
            <div class="container-menu">
                <div class="cont-menu">
                    <nav>
                        <a href="/Calendariocitas/index.php">Citas</a>
                        <a href="/Lista/citas.php">Listado de citas</a>
                        <a href="Carrito.html">Carrito</a>
                        <a href="TipoRostro.html">Tipo de Rostro</a>
                        <a href="ColorCabello.html">Color de Cabello</a>
                        <a href="Preguntas.html">Preguntas</a>
                        <a href="Encuesta.html">Encuesta de Satisfaccion</a>
                        <a href="publicar.php">Publicar</a>
                        <a href="Acerca De.html">Acerca De</a>
                    </nav>
                    <label for="btn-menu">✖️</label>
                </div>
            </div>

        </header>
        <!---Fin de Barra de busqueda--->
        <br><br>

        <script src="js/search.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
</body>

</html>