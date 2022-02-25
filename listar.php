<?php
include 'conexion-db.php';
// echo "Conexion exitosa";
// haremos una consulta
$sql="SELECT * from citas";
$result = $conn -> query($sql);
if($result -> num_rows>0){
while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>". $row['id']. "</td>";
    echo "<td>". $row['paciente']. "</td>";
    echo "<td>". $row['telefono']. "</td>";
    echo "<td>". $row['email']. "</td>";
    echo "<td>". $row['fecha_cita']. "</td>";
    echo "<td>". $row['observaciones']. "</td>";
    echo "<td> <a href='editar.php?id=".$row['id']."'> <i class='bi bi-pencil-square'></i> </a> </td>";
    echo "<td> <a href='eliminar.php?id=".$row['id']."'> <i class='bi bi-trash3-fill'></i> </a> </td>";
    echo "</tr>";
}
}else{
    echo ' no tenemos registros para su consulta';
}
//cerraremos la conexión
$conn->close();