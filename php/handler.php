<?php

/*
$link = mysql_connect("localhost","root","root") or die("<h2>no se encuentra el servidor</h2>");;
$db = mysql_select_db("registro",$link ) or die ("<h2>error de conexion</h2>");

$nombre=$_POST['1nombre'];
$matricula= $_POST['1matri'];
$email= $_POST['1email'];
$fecha= $_POST['1fecha'];
$hora= $_POST['1hora'];

$req = (strlen($nombre)*strlen($matricula)*strlen($email)*strlen($fecha)*strlen($hora)) or die ("no se han llenado todos los campos");

mysql_query ("INSERT INTO datos VALUES ('$nombre', '$matricula', '$email', '$fecha', '$hora')",$link) or die ("<h2>Error al enviarse los datos</h2>");

echo '
        <h2> Registro completo </h2>
        <a href="/" </a>
';
*/
$servername="localhost";
$database="registro";
$username="root";
$password="root";

//conexión
$conec = mysql_connect($servername, $database, $username, $password);

if (!$conec)
{
        die("coneccion fallida: " .mysql_connect_error() );
}
else
{
        echo " conexion exitosa " ;
        mysql_close($conec);
}

?>
