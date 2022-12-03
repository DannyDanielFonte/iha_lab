<?php
    class database
    {
            public $host = 'localhost'; //servidor
            public $user = 'root'; // usuario de phpmyadmin
            public $pass = ''; //contraseña de phpmyadmin
            public $db = "iha_lab"; // Base de datos
            private $conn;

        /* metodo constructor, este metodo sera el primero que se ejecute al momento de llamar la clase database.*/


        function _construct()
        {
            $this->conn = $this->connectToDatabase();/* hacemos un llamado a la funcion conectiondatabase() */
            return $this->conn; /* retornamos la coneccion */
        }

        
        /* funcion que permite conectarnos a nuestra base de datos 
        *@return $conn=>conexion a la DB.
        */
        function connectToDatabase()
        {
            /* utilizaremos mysql para interactuar con nuestra base de datos.
            // con el metodo mysqli_connect() vamos a genrar una coneccion con la base de datos */
            $conn = mysqli_connect($this->host, $this->User, $this->pass, $this->db)
            /* validamos si existe algún error de conexion con el metodo mysqli_connect_error(); */
            if(mysqli_connect_error()) {
                echo"tenemos un error de conexión" .mysqli_connect_error();/* mostramos el error de conexión*/
            }
            return $conn;

        }
    }
?>