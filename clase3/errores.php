<?php

 #Desactivar toda notificacion de error
 error_reporting(0);
 $nombre = 'Hola';
 echo $nombre;
 echo $nomb ;


 #Guardar errores en un log

 ini_set("log_errors",1);
 ini_set("error_log","");
 error_log("Hay un error");
 


?>