<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scalet=1">

	<link rel="stylesheet" type="" href="estilos.css">
</head>
<?php 
 /*if(isset($_POST["carro"])){
  print_r($_POST["carro"]);
 }else{
 	echo "la variable esta null y vacia";
 }*/

 $_POST['carro']  = ( isset($_POST['carro']) )  ? true : false;
 $_POST['carro2']  = ( isset($_POST['carro2']) )  ? true : false;

 var_dump($_POST);
?>
<body>
 <form action="" method="post" >
   <p><input type="checkbox" name="carro" value="carrooo">Tengo un carro</p>
   <p><input type="checkbox" name="carro2" value="carrooo2">Tengo un carro2</p>
   <input type="submit" name="" value="enviar">
 </form>   
</body>

</html>