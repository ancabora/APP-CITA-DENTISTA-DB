<?php  include 'partials/header.php';?>
<h2 class='display-4'> Listado de citas</h2>
<nav><a class="btn btn-info" href="index.php"><i class="bi bi-arrow-return-left"></i>Añadir cita</a></nav>

<div class="table-responsive">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nº de registro</th>
      <th scope="col">paciente</th>
      <th scope="col">Telefono</th>
      <th scope="col">email</th>
      <th scope="col">fecha cita</th>
      <th scope="col">observaciones</th>
      <th scope="col">modificar</th>
      <th scope="col">eliminar</th>
      
    </tr>
  </thead>
  <tbody>
    <?php include 'listar.php'; 
    //el registro de citas se carga automaticamenye cuando se registra alguna cita en index pagina principal en la web ?>
  </tbody>
</table>
</div>

<?php  include 'partials/footer.php';?>