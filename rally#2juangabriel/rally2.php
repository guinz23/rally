<?php

$conexion=mysqli_connect("127.0.0.1", "root", "","estudiante");
if(!$conexion){
  echo"error al conectar con el servidor";
}else{
    echo("conexion exitosa");
}

$sql="SELECT  estudiantes.id_estudiante,estudiantes.cedula,estudiantes.nombre,estudiantes.apellidos,carrera.carrera FROM estudiantes, carrera,estudiante_carrera WHERE carrera.id_carrera=estudiante_carrera.id_carrera AND estudiantes.id_estudiante=estudiante_carrera.id_estudiante";
$result = mysqli_query($conexion,$sql); 

if (!$result) { 
    $message = 'Invalid query: ' . mysqli_error() . " "; 
    $message = 'Whole query: ' . $sql;
    die($message); 
    } 
    $ruta2="C://escribir.txt";
    $write = fopen($ruta2, "w") or exit("Unable to open file!");
    while ($row =mysqli_fetch_assoc($result)) { 
    print_r($row["id_estudiante"]."\n"); 
    print_r($row["cedula"]."\n"); 
    print_r($row["nombre"]."\n"); 
    print_r($row["apellidos"]."\n"); 
    print_r($row["carrera"]."\n"); 
    
    fwrite($write,"id : ".$row["id_estudiante"]."   cedula : ".$row["cedula"]."  nombre : ".$row["nombre"]."  apellido : ".$row["apellidos"]."   carrera : ".$row["carrera"]."\n");
    fwrite($write, "------------------------");
} 
  