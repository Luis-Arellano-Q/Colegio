<?php
include("con_db.php");
session_start();

if(isset($_POST["iniciar_sesion"])){
  $email_reg=$_POST["email_reg"];
  $clave_reg=$_POST["clave_reg"];

  $consulta_sesion = "SELECT COUNT(*) as contar from datos where email='$email_reg' and clave='$clave_reg'";
  $question=mysqli_query($conect,$consulta_sesion);
  $list=mysqli_fetch_array($question);

  if($list['contar']>0){
    $_SESSION['email']=$email_reg;
    $_SESSION['clave']=$clave_reg;
    header("location:sesion.php");
  }
  else{
    ?>
    <div class="alert bad">
      <img src="assets/wrong.png" alt="">
      <h3>¡Email o contraseña incorrecta!</h3>
    </div>
    <?php
  }
}
?>