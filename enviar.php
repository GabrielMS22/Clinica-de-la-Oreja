<?php

  $destino= "admin@clinicadelaoreja.com";
  $nombre= $_POST["Nombre"];
  $correo= $_POST["Correo"];
  $Mensaje= $_POST["Mensaje"];
  $contenido= "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $Mensaje;
  mail($destino,"Contacto", $contenido);
  header("location:gracias.html")



?>