<?php
  require "Conexion.php";

  $afiliacion = $_POST["afiliacion"];  //esto lo recibimos de la app
  $password = $_POST["password"];

  $mysql_qry = "select * from paciente where afiliacion like '$afiliacion' and password like '$password';";

  $resultado = mysqli_query($conexion, $mysql_qry);

  # validamos el usuario y contraseña juntos, hay que validarlos por separado
  if($renglones=mysqli_num_rows($resultado) > 0){
    //echo "Login Success!! :D";
    echo "1";
  }else {
    //echo "Login not Success :'('";
    echo "0";
  }
?>
