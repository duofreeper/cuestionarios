<html>
<head>
<title> Modificando Registro</title>
</head>
<body>
<?php 
   
     
   if (isset($_POST["codigo"])) {
         $codigo =$_POST["codigo"];
         $descripcion =$_POST["descripcion"];
         $marca=$_POST["marca"];
         $presentacion=$_POST["presentacion"];
         $existencia=$_POST["existencia"];
         $precio=$_POST["precio"];

         $enlace = mysqli_connect("localhost","root","","super");
         if (!$enlace)
         {	 
            echo "Error no se pudo conectara MySQL ";
            exit;
         }
         mysqli_query ($enlace, "UPDATE enlatados SET descripcion='$descripcion', marca='$marca', presentacion='$presentacion', existencia='$existencia', precio='$precio' WHERE codigo=".$codigo);
         echo "<script language='javascript'> alert ('REGISTRO MODIFICADO CORRECTAMENTE ')</script>";
         header ("refresh:1;url=menu.html");
         mysqli_close($enlace);  
   } else {
       echo "<script language='javascript'> alert ('ERROR DE MODIFICACION DE DATOS')</script>";
         header ("refresh:1;url=menu.html");
   }

?>
</body>
</html>