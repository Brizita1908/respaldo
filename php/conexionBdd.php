<?php
//Conexion a la bdd asesoressa
$conn = new mysqli('localhost' , 'root' , '', 'asesoressa');
    if ($conn->connect_error) die($conn ->connect_error);
?>