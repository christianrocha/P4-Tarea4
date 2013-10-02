<!DOCTYPE HTML>
<html>
  <head>
  </head>
  <body>
    <h2>Sesion Cargada</h2>
<?php
    $Codigo = $_POST['codigo'];
    $Password = $_POST['pass'];

	if($Codigo == 100 and $Password = 'udg'){
    echo "&iexcl;&iexcl;&iexcl;BIENVENIDO!!!"; 
	}else{
	echo "Codigo incorrecto";
	}
    ?>
  </body>
</html>