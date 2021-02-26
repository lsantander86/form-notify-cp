<?php 
$servername = "localhost";
$database = "came_pagos";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);


if (isset($_POST["email"],
 $_POST["nombre"], 
 $_POST["apellido"], 
 $_POST["razonsocial"], 
 $_POST["tipodoc"], 
 $_POST["numdoc"], 
 $_POST["provincia"], 
 $_POST["localidad"], 
 $_POST["direccion"], 
 $_POST["cp"], 
 $_POST["telefono"]) 
 and $_POST["email"]!="" 
 and $_POST["nombre"]!="" 
 and $_POST["apellido"]!="" 
 and $_POST["razonsocial"]!=""
 and $_POST["tipodoc"]!=""
 and $_POST["numdoc"]!=""
 and $_POST["provincia"]!=""
 and $_POST["localidad"]!=""
 and $_POST["direccion"]!=""
 and $_POST["cp"]!=""
 and $_POST["telefono"]!=""){

$email = $_POST["email"];
$nombre = $_POST["nombre"]; 
$apellido = $_POST["apellido"]; 
$razonsocial = $_POST["razonsocial"];
$tipodoc = $_POST["tipodoc"];
$numdoc = $_POST["numdoc"];
$provincia = $_POST["provincia"]; 
$localidad = $_POST["localidad"]; 
$direccion = $_POST["direccion"]; 
$cp = $_POST["cp"]; 
$telefono = $_POST["telefono"];

//Consulta SQL
$consulta = "INSERT INTO tarjetaprepaga_cp
(correo,nombre,apellido,razon_social,tipo_documento,numero_documento,provincia,localidad,direccion,cp,telefono) VALUES
('$email','$nombre','$apellido','$razonsocial','$tipodoc','$numdoc','$provincia','$localidad','$direccion','$cp','$telefono')";


//Ejecuta la consulta SQL

if(mysqli_query($conn,$consulta)){

    echo "<h1>Se agregó...</h1>";
           
    }else{
        echo "<h1>No se agregó...</h1>";
    }

} else {

echo '<p>Por favor, complete el <a href="index.php">formulario</a></p>';
}

?>

