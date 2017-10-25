<?php
$host="127.0.1";
$user="root";
$password="";
$db="Estudiante";
$con = new mysqli($host,$user,$password,$db);
print "<script>alert(\"conexion\")</script>";
?>