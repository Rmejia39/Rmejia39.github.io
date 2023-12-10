<?php
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");

include('config.php');
                        
$idEvento     = $_POST['idEvento'];

$evento       = ucwords($_REQUEST['evento']);
$f_inicio     = $_REQUEST['fecha_inicio'];
$fecha_inicio = date('Y-m-d', strtotime($f_inicio)); 

$color_evento = $_REQUEST['color_evento'];

// Obtener las horas desde el formulario
$hora_inicio = $_REQUEST['hora_inicio'];

$UpdateProd = ("UPDATE eventoscalendar 
    SET evento ='$evento',
        fecha_inicio ='$fecha_inicio',
        color_evento ='$color_evento',
        hora_inicio = '$hora_inicio'  -- Actualizar la hora de inicio (sin coma aquí)
    WHERE id='".$idEvento."' ");
$result = mysqli_query($con, $UpdateProd);

header("Location:index.php?ea=1");
?>