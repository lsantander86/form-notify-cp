<?php include 'php/conn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario de solictud</title>   
    <link rel="stylesheet" href="css/styles.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class ="container">
<form action="php/process.php" method="post" id="formulario" onsubmit ="return validar();">
    <div class = "row">
        <div class="col" id="grupo__email">
            <label for="" class="form-cotrol">Correo: </label>
            <input class="formulario__input" type="email" name="email" id="email"/>
        </div>
        <div class="col" id="grupo__nombre">    
            <label for="">Nombre:</label>
            <input class="formulario__input" type="text" name="nombre" id="nombre"/>
        </div>
        <div class="col" id="grupo__apellido">
            <label for="">Apellido:</label>
            <input class="formulario__input" type="text" name="apellido" id="apellido"/>
        </div>
    </div> 

    <div class = "row">   
        <div class="col">
               
                <label for="">Razón Social:</label>
                <input class="formulario__input" type="text" name="razonsocial" id="razonsocial">
        </div>
        <div class="col">
            <label for="" class="form-label">Tipo documento:
                <select class="formulario__input" id="tipodoc" name="tipodoc" require>
                    <option selected>Seleccione...</option>
                    <option value="DNI">DNI</option>
                    <option value="CUIL">CUIL</option>
                    <option value="CUIT">CUIT</option>
                    <option value="LIBRE_CIVICA">Libreta Cívica</option>
                    <option value="LIBRETA_ENROLAMIENTO">LIbreta de Enrolamiento</option>
                </select>
            </label>      
        </div>
        <div class="col">
            <label for="">Número de documento: </label>
            <input class="formulario__input" type="text" name="numdoc" id="numdoc">
        </div>
    </div> 
    <div class = "row">    
                <div class="col">
                    <label for="" class="form-label">Provincia: 
                        <select class="formulario__input" id="provincia" name="provincia" require>
                            <option selected>Seleccione...</option>
                            <?php
                                    $query = $conn->prepare("SELECT * FROM provincias");
                                    $query->execute();
                                    $data = $query->fetchAll();
                                    foreach ($data as $valores):
                                    echo '<option value="'.$valores["provincia"].'">'.$valores["provincia"].'</option>';
                                    endforeach;
                                ?>
                        </select>
                    </label>     
                </div>
                <div class="col">
                    <label for="">Localidad: </label>
                    <input class="formulario__input" type="text" name="localidad" id="localidad">
                </div>
                <div class="col">
                    <label for="">Dirección: </label>
                    <input class="formulario__input" type="text" name="direccion" id="direccion">
                </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col col-lg-4">
            <label for="">Codigo Postal: 
            <input class="formulario__input" type="text" name="cp" id="cp"></label>
        </div>
        <div class="col col-lg-4">
            <label for="">Teléfono: 
            <input class="formulario__input" type="text" name="telefono" id="telefono"></label>
        </div>
    </div>
        <div class="d-grid gap-2 col-6 mx-auto">            
            <button type="submit" class="btn btn-outline-success">Enviar</button>
        </div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>