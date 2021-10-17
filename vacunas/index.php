 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Vacunación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
      
</head>
<body>

    

    <form method="post" action="index.php" enctype="multipart/form-data">

        <div class="container">
            <div class="row">
            <h1>Datos de Vacunación</h1>
            <hr>
                <div class="col-6">
                    <label for="nombre ">Nombre:</label>
                    <input name="nombre" type="text" name="nombre" id="nombre" required class="form-control"> <br>
                    <br>
                    

                </div>
                <div class="col-6">
                    <label for="apellido">Apellido:</label>
                    <input type="apellido" name="apellido" id="apellido" required class="form-control"> <br> <br>

                </div>
            </div>
                
         </div>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <label for="password">Identificación:</label>
                        <input name="id" type="id" name="id" id="contraseña"
                            class="form-control"> <br> <br>

                    </div>
                    <div class="col-3">
                        <label for="Pais" class="form-label">Tipo de Biologico</label>
                        <select class="form-select" name="tipo">
                            <option selected value="Astrazeneca">Astrazeneca</option>
                            <option value="Pfizer">Pfizer</option>
                            <option value="Moderna">Moderna</option>
                            <option value="Johnson & Johnson">Johnson & Johnson</option>
                            <option value="Sputnik V">Sputnik V</option>
                        </select>
                    </div>
                </div>
            </div>

                <div class="container">
                    <div class="row">
                        <div class="col-6">
                         <label for="date">Primera dosis</label> <br>
                         <input type="date" name="fecha_ini" id="fecha"> <br> <br>
    
                        </div>
                        <div class="col">
                            <label for="date">Segunda dosis</label> <br>
                            <input type="date" name="fecha_fin" id="fecha"> <br> <br>
                       
                        </div>     
                    </div>

                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <input type="submit"  value="Enviar" class="btn btn-outline-success">
                            <input type="reset" value="Resetear" class="btn btn-outline-danger ">
    
                        </div>
                    
                </div>

                
    </form>
    
 

    <?php
        
        $identficacion = isset($_POST["id"]) ? $_POST["id"] : "";
        $nombre = isset($_POST["nombre"]) ? $_POST['nombre'] : "";
        $apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : "";
        $biologico = isset($_POST["tipo"]) ? $_POST["tipo"] : "";
        $fechaini = isset($_POST["fecha_ini"]) ? $_POST["fecha_ini"] : "";
        $fechafin = isset($_POST["fecha_fin"]) ? $_POST["fecha_fin"] : "";   
    
        $contenido="\n$identficacion;$nombre;$apellido;$biologico;$fechaini;$fechafin;";
        
        if ($identficacion && $nombre && $apellido && $biologico && $fechaini && $fechafin != '') {
            $archivo=fopen("datos_vac.txt","a");
            fwrite($archivo,$contenido); 
            fclose($archivo);
            
        }
        else {
            
        }  
    ?>


<?php

    $archivo = fopen('datos_vac.txt','r');
    if (!$archivo) {echo 'ERROR: No ha sido posible abrir el archivo.'; exit;}

    echo '<br><table class="table table-success table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Biologico</th>
        <th scope="col">Primera Dosis</th>
        <th scope="col">Segunda Dosis</th>
      </tr>
    </thead>
    <tbody>';
    $loop = 0; // contador de líneas
    while (!feof($archivo)) { 
    $linea = fgets($archivo); // guardamos toda la línea en $linea como un string   
    // agregamos la línea a la matriz $field
    $field[$loop] = explode (';', $linea);// dividimos $line en sus celdas, separadas por el caracter ;
    // generamos la salida HTML
    echo '
      <tr>
        <td>'.$field[$loop][0].'</td>
        <td>'.$field[$loop][1].'</td>
        <td>'.$field[$loop][2].'</td>
        <td>'.$field[$loop][3].'</td>
        <td>'.$field[$loop][4].'</td>
        <td>'.$field[$loop][5].'</td>
      </tr>'; 
      $loop++;  //loop  aumenta hasta que se llegue al final del archivo
    }
    echo '               
    </tbody>
   </table>';
    fclose($archivo);
    

?>



<script>
    if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
    }
</script>

   
</body>

</html> 

