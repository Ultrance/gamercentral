<html>
<head> <title> GAMER CENTRAL </title>
<meta charset="UTF-8">
<style>
.text {font-size:10; font-family:verdana; color:#7E6D1D; text-decoration:none}
.text:hover {font-size:10; font-family:verdana; color:#BFA62B; text-decoration:none}
</style>
<link rel="icon" href="ico.ico" type="image/x-icon" />
<link rel="shortcut icon" href="ico.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="screen" href="contactanos.css"/>
</head>

<body>
<br><br>
<div id="menu">
<ul>
<li></li>
<li><a href='inicio.html'>INICIO</a></li>
<li><a href='noticias.html'>NOTICIAS</a></li>
<li><a href='contactanos.php'>CONTÁCTANOS</a></li>
<li><a href='about.html'>ACERCA DE NOSOTROS</a></li>
</ul>
</div>
<h1 id="logo"><center><img src="barralogo.png" alt="" height="90" width="622"></center></h1>
<div id="contenedor">
<div id="bloque_izq">
    
<h2>¡CONTÁCTANOS!</h2><br><br>
<form method="post" action="contactanos.php">
<center>
TELEFONO:<br><input type="text" name="a"><br>
NICKNAME:<br><input type="text" name="b"><br>
CORREO:<br><input type="text" name="c"><br>
COMENTARIO:<br><textarea name="d" rows="10" cols="40"></textarea><br><br><br><br>
    <input type="submit" value="enviar"></center><br><br>
    
    
    </form>

    
    
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script><script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</div>
</div>
</body>
</html>
<?php
error_reporting(0);
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$conexion=mysql_connect("localhost","gamercentral","123456789") or die ("ERROR");
mysql_select_db("gamercentral",$conexion) or die ("ERROR EN LA BASE DE DATOS");
$sql="insert into contacto(telefono,nombre,correo,comentario) values ('$a','$b','$c','$d')";
mysql_query($sql,$conexion) or die ("error de sql");
mysql_close($conexion);
echo "Los datos se han agregado";

?>	