<?php
//declaramos las variables y las inicializamos con cadena vacia
$nombre=$email=$telefono=$fecha=$hora=$observaciones='';
$fechasolicitud = date("d-m-Y H:i:s");

//recogemos las variables que nos llegan por el formulario
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //las asignamos a las variables filtradas

    $nombre =htmlspecialchars($_POST["nombre"]);
    $email =htmlspecialchars($_POST["email"]);
    $telefono =htmlspecialchars($_POST["telefono"]);
    $fecha =htmlspecialchars($_POST["fecha"]);
    $hora =htmlspecialchars($_POST["hora"]);
    $observaciones =htmlspecialchars($_POST["observaciones"]);


}
//enviar por email
/*$asunto="cita medico de $nombre";
$msg="
Datos de la cita:
realizada con Fecha: $fechasolicitud
nombre: $nombre
telefono: $telefono
fecha: $fecha
hora: $hora
observaciones: $observaciones
";
$headers = "CC: $email";
mail("canodelacuadra@gmail.com","My subject",$asunto,$msg,$headers);*/

//registrarlo en la base de datos despues de mandarlo por email
$fechahora="$fecha $hora";
include 'conexion-db.php';
$sql= "INSERT INTO citas(paciente, telefono,email,fecha_cita,observaciones)
VALUES('$nombre','$telefono','$email','$fechahora','$observaciones')";
$result = $conn->query($sql);

//le mandamos a lista-citas.html
header('Location:lista-citas.php');