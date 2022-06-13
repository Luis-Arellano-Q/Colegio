<?php

include("con_db.php");

if(isset($_POST["registrar"])){
  $name= trim($_POST["nombre"]);
  $apellido= trim($_POST["apellido"]);
  $celular= trim($_POST["celular"]);
  $email= trim($_POST["email"]);
  $clave= $_POST["clave"];
  $fecha_reg=date("d/m/y");
  

  $consulta_registro = "SELECT COUNT(*) as contar from datos where email='$email'";
  $conectar=mysqli_query($conect,$consulta_registro);
  $array=mysqli_fetch_array($conectar);

  if ($array['contar']>0) {
    ?>
      <div class="alert error">
        <img src="assets/warning.png" alt="">
        <h3>El email ya ha sido registrado</h3>
      </div>
    <?php
  }
  else{
    $consulta="INSERT INTO datos(nombre, apellido, celular, email, clave, fecha_reg) VALUES ('$name','$apellido','$celular','$email','$clave', '$fecha_reg')";

    $resultado= mysqli_query($conect,$consulta);

    if ($resultado){
      ?>
      <div class="alert ok">
        <img src="assets/check.png" alt="">
        <h3>¡Te has registrado correctamente!</h3>
      </div>
      <?php
    }else{
      ?>
      <div class="alert bad">
        <img src="assets/wrong.png" alt="">
        <h3>¡Ups ha ocurrido un error!</h3>
      </div>
      <?php
    }
  }
    
  
}