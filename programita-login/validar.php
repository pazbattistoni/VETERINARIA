<?php
  include("db.php");
  $USUARIO= $_POST['usuario'];
  $PASSWORD= $_POST['password'];
  $consulta= "SELECT* FROM personal where usuario='$USUARIO' and password='$PASSWORD'";
  $resultado= mysqli_query($connection, $consulta);
  $filas= mysqli_num_rows($resultado);
  if($filas){
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