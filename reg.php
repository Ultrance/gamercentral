<html>
<head> <title> Registro </title>
<meta charset="UTF-8">
<style>
.text {font-size:10; font-family:verdana; color:#7E6D1D; text-decoration:none}
.text:hover {font-size:10; font-family:verdana; color:#BFA62B; text-decoration:none}
</style>
<link rel="icon" href="ico.ico" type="image/x-icon" />
<link rel="shortcut icon" href="ico.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="screen" href="reg.css">
</head>

<body>
    <div id="menu">
<ul>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
</ul>
</div>
<h1 id="logo"><center><img src="reg.png" alt="" height="45" width="311"></center></h1>
<div id="contenedor">
<div id="bloque_izq">
    

<br><br><br>

 
<form method="post"><center>
<font face="Arial" size="2" color="#000">
Nick(Nombre de Usuario):<br><input type="text" name="u"><br><br>
Nombre(s):<br><input type="text" name="a"><br><br>
Apellido(s):<br><input type="text" name="b"><br><br>
E-Mail:<br><input type="text" name="c"><br><br>
Dirección:<br><input type="text" name="d"><br><br>
Juego Preferido:<br><input type="text" name="e"><br><br>
<input type="submit" value="Registrar"><br><br>
</font></center></form>
</div></div></body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>		
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</html>

<?php
error_reporting(0);
$u=$_POST ['u'];
$a=$_POST ['a'];
$b=$_POST ['b'];
$c=$_POST ['c'];
$d=$_POST ['d'];
$e=$_POST ['e'];
$conexion=mysql_connect("localhost","gamercentral","123456789") or die ("ERROR");
mysql_select_db("gamercentral",$conexion) or die ("ERROR EN LA BASE DE DATOS");
$sql="insert into registro(nick,nombre,apellido,email,direccion,jue_pref) VALUES ('$u','$a', '$b', '$c', '$d', '$e')";
mysql_query($sql,$conexion) or die ("error de sql");
mysql_close($conexion);
echo "<script>alert(Los datos se han agregado);</script>";
 

?>	