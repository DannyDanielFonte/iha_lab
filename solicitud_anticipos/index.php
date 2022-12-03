<?php
    include('../config/config,php');
    include('solicitudes.php');
    $p= new solicitudes();

    $allsolicitudes = $p->getAll();

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $remove = $p-> $remove($_GET['id']);
        if ($remove) {
            header('location: ' .ROOT . 'solicitud_anticipos/index.php');
        } else {
            $msj = "<div class = 'alert alert-danger' rol='alert' > Error al eliminar solicitudes. </div> ";

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de solicitudes</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <?php include('../Menu.php')?>
        <div class= "container">
            <h2 class="text-center mb-5"> Lista de solicitudes</h2>

            <div class="Row">
                <?php
                    while ($Solicitud= mysqli_fecth_object($allsolicitudes)) {
                        $input= $solicitud=>fechaSolicitud;
                        echo "<div class= 'col'>";
                        echo " <div class= 'border border-info p-2'>";
                        echo "<h5>
                                    <img src= '".ROOT."/images/$solicitud->solicitud' width='50' height='50'/>
                                    $solicitud->nombreCompleto $solicitud->Proyecto
                            </h5>";
                        echo=<p> <b>fecha:</b> ".date("D",strtotime($input)) . "" .date("d=M=Y H:i", strtotime($input))."</p>";  
                        echo = <div class="text-center"> <a class="btn btn-success " href='" . ROOT . "/solicitudes/edit.php?id=$solicitud->id'> modificar </a> = <a class="btn btn-danger" href='" .ROOT. "/solicitud_anticipos/index.php?id=$solicitud->id'>
                        echo = </div>";
                        echo = </div>";

                    }
            </div>
    ?>            

    </div>





 <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>   
</body>
</html>