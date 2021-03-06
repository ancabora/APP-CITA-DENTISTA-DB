<?php  
//cogemos la variable get
if(isset($_GET['id'])){
   $id= $_GET['id']; 
   //echo $id;
}
include 'conexion-db.php';
$sql="SELECT * FROM citas
WHERE id = $id;
";
$resultado = $conn -> query($sql);

while($fila = $resultado -> fetch_assoc()){
    $filas[]=$fila;
}

$id = $filas[0]['id'];
$paciente = $filas[0]['paciente'];
$email = $filas[0]['email'];
$telefono = $filas[0]['telefono'];
$fecha = substr($filas[0]['fecha_cita'],0,10);
$hora = substr($filas[0]['fecha_cita'],-8);
$observaciones = $filas[0]['observaciones'];



?>


<?php include 'partials/header.php'; ?>
<h2 class="text-center">EDICION DE CITAS</h2>
<nav>
  <a class="btn btn-info" href="lista-citas.php"><i class="bi bi-arrow-return-right"></i>Ver lista</a>
</nav>
<form method="post" action="modificar.php">
    <input type="hidden" name="id" value="<?php echo $id ?>">
  <div class="row mb-3">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre <i class="bi bi-person-lines-fill"></i></label>
    <div class="col-sm-10">
      <input
      value ="<?php echo $paciente ?>"
       required name="nombre" type="text" class="form-control" id="nombre">
    </div>

  </div>
  <div class="row mb-3">
    <label for="email" class="col-sm-2 col-form-label">Email <i class="bi bi-envelope-check-fill"></i></label>
    <div class="col-sm-10">
      
      <input  value ="<?php echo $email ?>" required name="email" type="email" class="form-control" id="email">
    </div>

  </div>
  <div class="row mb-3">
    <label for="telefono" class="col-sm-2 col-form-label">Telefono <i class="bi bi-telephone-forward-fill"></i></label>
    <div class="col-sm-10">
      
      <input value ="<?php echo $telefono ?>" required name="telefono" type="tel" class="form-control" id="telefono">
    </div>

  </div>
  <div class="row mb-3">
   
    <label for="fecha-cita" class="col-sm-2 col-form-label">Fecha <i class="bi bi-calendar-day"></i></label>
    <div class="col-sm-4">
      <input value ="<?php echo $fecha?>" required name="fecha" type="date" class="form-control" id="fecha-cita">
    </div>
    <label for="hora-cita" class="col-sm-2 col-form-label">Hora <i class="bi bi-alarm"></i></label>
    <div class="col-sm-4">
      
      <input value ="<?php echo $hora?>" requiered name="hora" type="time" class="form-control" id="hora-cita">
    </div>
  </div>

  <div class="form-floating">
    <textarea  name="observaciones" class="form-control" placeholder="Pon aqui tus comentarios" id="observaciones" style="height: 100px"><?php echo $observaciones?></textarea>
    <label  for="observaciones">Observaciones<i class="bi bi-file-text"></i></label>
  </div>
  <div class="d-grid col-6 mx-auto mt-3">
    <button type="submit" class="btn btn-primary">Modificar cita</button>
  </div>
</form>



<?php include 'partials/footer.php'; ?>