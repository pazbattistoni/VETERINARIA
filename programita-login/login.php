<?php
  include("conexion_db.php");
  $USUARIO= $_POST['usuario'];
  $PASSWORD= $_POST['password'];
  session_start();
  $_SESION['usuario']=$USUARIO;
  $consulta= "SELECT* FROM personal where usuario='$USUARIO' and password='$PASSWORD'";
  $resultado= mysqli_query($connection, $consulta);
  $filas= mysqli_fetch_array($resultado);
  if($filas['id_cargo']==1){ //administrador
    header("location:home.html");
  } else{
    include("index.html");
    ?>
    <h1>ERROR DE AUTENTIFICACIÓN</h1>
    <?php 
  }
  mysqli_free_result($resultado);
  mysqli_close($connection);
?>