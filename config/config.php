<?php 
/* creación de una costante la cual nos guardara la ruta de acceso al proyecto*/
    include_once('functions.php');
        if(!defined ('root')){
        define("rood", 'http://',$_SERVER['http_host'].getFolderProject());
   }
?>