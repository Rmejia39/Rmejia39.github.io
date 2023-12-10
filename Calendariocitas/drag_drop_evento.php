<?php
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");

include('config.php');
                        
$idEvento     = $_POST['idEvento'];
$start        = $_REQUEST['start'];
$fecha_inicio = date('Y-m-d', strtotime($start)); 
$hora_inicio  = $_REQUEST['hora_inicio']; // Obtener la hora de inicio del formulario

$UpdateProd = ("UPDATE eventoscalendar 
    SET 
        fecha_inicio = '$fecha_inicio',
        hora_inicio = '$hora_inicio',  -- Actualizar la hora de inicio
    WHERE id = '".$idEvento."' ");
$result = mysqli_query($con, $UpdateProd);

?>