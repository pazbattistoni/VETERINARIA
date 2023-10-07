<?php
  if($_SERVER['REQUEST_METHOD']!='POST'){
    header("Location:home.html");
  }
  $nombre= $_POST['nombre'];
  $mail= $_POST['mail'];
  $asunto= $_POST['asunto'];
  $mensaje= $_POST['mensaje'];
  
  $respuesta=mail('camilasalvia2@gmail.com', "Mensaje web: $asunto", $mensaje);
  if ($respuesta){
        echo "Mail enviado exitosamente!";
      } else{
        echo "Error al enviar";
      }
?>