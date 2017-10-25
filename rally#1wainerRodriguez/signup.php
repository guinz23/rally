<?php
if($_POST) {
include "conexion.php";
$sql = "INSERT INTO estudiantes(cedula, nombre, apellidos) VALUES (\"$_POST[cedula]\",\"$_POST[nombre]\",\"$_POST[apellidos]\")";
if ($con->query($sql) === TRUE) {
$last_id = $con->insert_id;
$sql = "INSERT INTO estudiante_carrera(id_estudiante, id_carrera) VALUES ('$last_id',\"$_POST[carreraxs]\")";

if ($con->query($sql) === TRUE) {
print "<script>alert(\"se ha guardado el estudiante\");window.location='index.php';</script>";
}else{
  echo("Error description: " . mysqli_error($con));
  return;
print "<script>alert(\"Error al agregar la carrera\");window.location='index.php';</script>";
}
} else {
print "<script>alert(\"Error al agregar la carrera\");window.location='index.php';</script>";
}
}

