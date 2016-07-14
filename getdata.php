<?php

$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"vaccinesapp");
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"vaccinesapp");

	$sql="select * from citas";
	$datos=array();
	$rs=mysqli_query($link,$sql);
	while($row=mysqli_fetch_object($rs)){
		$datos[]=$row;
	}
	echo json_encode($datos);
?>