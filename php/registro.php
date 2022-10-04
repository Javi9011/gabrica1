<?php
     $nombre_completo = $_POST['nombre_completo'];
     $nit = $_POST['nit'];
     $nombre_punto = $_POST['nombre_punto'];
     $nombre_equipo = $_POST['nombre_equipo'];
     $ciudad = $_POST['ciudad'];
     $promotor = $_POST['promotor'];
     $rtc = $_POST['rtc'];
     $capitan = $_POST['capitan'];

     $query = "INSERT INTO usuarios(Nombre_cliente, Nit, Nombre_punto, Nombre_equipo, Ciudad, Promotor, RTC, Capitan) 
                VALUES ('$nombre_completo', '$nit', '$nombre_punto', '$nombre_equipo', '$ciudad', '$promotor', '$rtc', '$capitan') ";

?>