<?php
  $nAfiliacion = $_POST['nAfiliacion'];
  $fecha_dispositivo = $POST['fecha_actual'];

  $mysql_qry = "select afiliacion,fecha from regvacunas where afiliacion like '$afiliacion';";

  //Código para comparar la fecha actual del dispositivo con la de la proxima vacuna del paciente

?>
