<?php
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");

include('config.php');
                        
$evento       = ucwords($_REQUEST['evento']);
$f_inicio     = $_REQUEST['fecha_inicio'];
$fecha_inicio = date('Y-m-d', strtotime($f_inicio)); 

$color_evento = $_REQUEST['color_evento'];

// Obtener las horas desde el formulario
$hora_inicio = $_REQUEST['hora_inicio'];

$InsertNuevoEvento = "INSERT INTO eventoscalendar(
      evento,
      fecha_inicio,
      color_evento,
      hora_inicio
      )
    VALUES (
      '" .$evento. "',
      '". $fecha_inicio."',
      '" .$color_evento. "',
      '" .$hora_inicio. "'
  )";
$resultadoNuevoEvento = mysqli_query($con, $InsertNuevoEvento);

header("Location:index.php?e=1");
?>