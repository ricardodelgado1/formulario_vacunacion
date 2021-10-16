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
                            <input type="submit" value="Enviar" class="btn btn-outline-success">
                            <input type="reset" value="Resetear" class="btn btn-outline-danger ">
    
                        </div>
                    
                </div>

                
    </form>
    Nombre:  <?php isset($_POST["nombre"]) ? print $_POST["nombre"] : ""; ?><br>
    Apellido: <?php isset($_POST["apellido"]) ? print $_POST["apellido"] : ""; ?><br>
    Identificación: <?php isset($_POST["id"]) ? print $_POST["id"] : ""; ?><br>
    Tipo de Biologico: <?php isset($_POST["tipo"]) ? print $_POST["tipo"] : ""; ?><br>
    Fecha primera dosis: <?php isset($_POST["fecha_ini"]) ? print $_POST["fecha_ini"] : ""; ?><br>
    Fecha segunda dosis: <?php isset($_POST["fecha_fin"]) ? print $_POST["fecha_fin"] : ""; ?><br>
    
    <?php
   /*  $contenido="$nombre.";".$apellido";
    $archivo=fopen("recibido/datos_vac.txt","w");
    fwrite($archivo,$contenido); */
   ?>

   
</body>

</html> 

