<html>

<head>
    <title> Insertando Registro </title>
</head>

<body>
    <?php 
   if (isset($_POST["codigo"])) {
         $codigo =$_POST["codigo"];
         $descripcion =$_POST["descripcion"];
         $marca =$_POST["marca"];
        $presentacion =$_POST["presentacion"];
         $existencia =$_POST["existencia"];
         $precio =$_POST["precio"];

         $enlace = mysqli_connect("localhost","root","","super");
         if (!$enlace)
         {	 
            echo "Error no existe la BD";
            exit;
         }
         mysqli_query ($enlace, "INSERT INTO enlatados VALUES ('$codigo','$descripcion','$marca','$presentacion','$existencia','$precio')");
         echo "<script language='javascript'> alert ('REGISTRO AGREGADO CON EXITO ')</script>";
         header ("refresh:1;url=menu.html");
         mysqli_close($enlace);  
   } else {
       echo "<script language='javascript'> alert ('NO SE HA ENVIADO INFORMACION')</script>";
         header ("refresh:1;url=menu.html");
   }
  ?>
</body>

</html>