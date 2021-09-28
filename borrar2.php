<html>
<head>
<title> Borrando Registro </title>
</head>
<body>
<?php
if(isset($_POST["codigo"])) {
    $clave =$_POST["codigo"];


$enlace = mysqli_connect("localhost","root","","super");
if (!$enlace)
{
    echo "Error no existe BD ";
    exit;
}
mysqli_query ($enlace,"DELETE FROM enlatados WHERE codigo =".$clave);
echo "<script language='javascript'> alert ('REGISTRO ELIMINADO CON EXITO ') </script>";
header ("refresh:1;url=menu.html");
mysqli_close($enlace);
}else {
    echo"<script language='javascript'> alert ('NO SE A ENVIADO INFORMACION')</script>";
    header ("refresh:1;url=menu.html");

}
?>
</body>
</html>