<?php
    include('../config/config.php');    
    include('../config/database.php');

    class solicitudes {
        public $conn;

        function _construct()
        {
            $db = new database();
            $this -> conn = $db->connectToDatabase();
        }

        function save($params){
            $nombreCompleto= $params['nombreCompleto'];
            $Proyecto= $params['Proyecto'];
            $email= $params['email'];
            $phone= $params['phone'];
            $observaciones= $params['observaciones'];
            $fechaSolicitud= $params['fechaSolicitud'];
            $fechaMonitoreo= $params['fechaMonitoreo'];
            $solicitud= $params['solicitud'];

            $insert =" INSERT INTO solicitudes VALUES ( NULL, '$nombreCompleto', '$Proyecto', '$email','$phone', '$observaciones', '$fechaSolicitud', '$fechaMonitoreo', '$solicitud')";
            return mysqli_query($this->conn, $insert);
        }

        function getAll()
            $sql="SELECT * FROM solicitudes ORDER BY fechaSolicitud ASC ";
            return mysqli_query($this->conn, $sql);

    }
?>