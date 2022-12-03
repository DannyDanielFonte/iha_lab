<?php
    include('../config/config.php');
    include('solicitudes.php');

    if ( isset($_POST) && !empty($_POST)){
        $Solicitudes = new solicitudes();
      if ($_FILES['solicitud'] ["name"] !== ''){
        $_POST['solicitud']=  saveimage($_FILES); 
    }

    $save = $Solicitudes->save($_POST);
        if ($save){
            $error= '<div class= "alert alert-success" role="alert" > Solicitud enviada correctamente</div>';
        } else {
            $error= '<div class= "alert alert-danger" role="alert" > Error al enviar la información </div>';
        }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Solicitud</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <?php include('../menu.php') ?>
        <div class ="container">
          <?php  
              if(isset($error)){ 
              echo $error;
             }
          ?>  
          <h2 class= "text-center mb-5"> Creacion Solicitud </h2>  
            <form method="POST" enctype="multipart/form-Data">
                <div class="row mb-2">
                    <div class= "Col">
                        <input type="text" name="nombreCompleto" id="nombreCompleto" placeholder= "Nombre del Beneficiario" requiere class="form-control" />
                    </div>
                    <div class= "Col">
                        <input type="text" name="Proyecto" id="Proyecto" placeholder= "Proyecto al cual asiste" requiere class="form-control" />
                    </div>
                </div>
                <div class="row mb-2">
                    <div class= "Col">
                        <input type="email" name="email" id="email" placeholder= "Correo del Beneficiario" requiere class="form-control" />
                    </div>
                    <div class= "Col">
                        <input type="number" name="phone" id="phone" placeholder= "Número de Contacto" requiere class="form-control" />
                    </div>
                </div>
                <div class="row mb-2">
                    <div class= "Col">
                        <textarea name="observaciones" id=observaciones" placeholder="Observaciones" requiere class="form-control" > </textarea>
                        <b>Por favor ingresar información importante como  cuenta para deposito, etc.  </b>
                    </div>
                </div>    
                <div class="row mb-2">
                    <div class= "Col">
                        <input type="datetime-local" name="fechaSolicitud" id="fechaSolicitud" requiere class="form-control" />
                    </div>
                    <div class= "Col">
                        <input type="datetime-local" name="fechaMonitoreo" id="fechaMonitoreo" requiere class="form-control" />
                    </div>
                </div>
                <div class="row mb-2">
                    <div class= "Col">
                        <input type="file" name="solicitud" id="solicitud" class="form-control" />
                    </div>
                </div>
                <button class="btn btn-success"> Enviar Solicitud </button>
            </form>

        </div>
    ?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
</body>
</html>