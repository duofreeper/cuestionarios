<?php

 $conexion=mysqli_connect('localhost','root','','super');

 ?>

<!DOCTYPE html>
 <html>

<head></head>
<body>
<a href="menu.html" class="btn">
        <input type="button" value="Regresar al menu">
    </a>

        <table border="1">
            <thead>
                <th>Codigo </th>
                <th>Descripcion </th>
                <th>Marca<br> </th>
                <th>Presentacion </th>
                <th>Existencia </th>
                <th>Precio </th>
               

            </thead>
        


<?php
$sql="SELECT * from enlatados";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result))
{
    ?>
    <tr>
        <td> <?php echo $mostrar['codigo'] ?></td>
        <td> <?php echo $mostrar['descripcion'] ?></td>
        <td> <?php echo $mostrar['marca'] ?> </td>
        <td> <?php echo $mostrar['presentacion'] ?> </td>
        <td> <?php echo $mostrar['existencia']?> </td>
        <td> <?php echo $mostrar['precio']?> </td>


</tr>
<?php
}
?>
</table>

</body>
</html>
