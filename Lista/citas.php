<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Listado de Citas</title>
    <!-- Estilos CSS para la lista de citas -->
    <link rel="stylesheet" href="styles.css">

    </style>
</head>
<body>
    <?php
    include('config.php');

    // Consulta SQL para obtener todas las citas
    $sqlCitas = "SELECT id, evento, fecha_inicio, color_evento, hora_inicio FROM eventoscalendar";
    $resultadoCitas = mysqli_query($con, $sqlCitas);

    // Verificar si hay datos devueltos por la consulta
    if (mysqli_num_rows($resultadoCitas) > 0) {
        // Mostrar los datos de las citas en una tabla
        echo "<h1>Listado de Citas</h1>";
        echo "<table>";
        echo "<tr><td>Evento</td><td>Fecha</td><td>Hora</td></tr>";
        while ($row = mysqli_fetch_assoc($resultadoCitas)) {
            echo "<tr>";
            echo "<td>" . $row["evento"] . "</td>";
            echo "<td>" . $row["fecha_inicio"] . "</td>";
            echo "<td>" . $row["hora_inicio"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No hay citas registradas.</p>";
    }

    // Liberar el resultado de la consulta y cerrar la conexión
    mysqli_free_result($resultadoCitas);
    mysqli_close($con);
    ?>

    <div style="text-align: center">
        <a href="../index.html"><button>Volver a la pantalla principal</button></a>
    </div>

</body>
</html>