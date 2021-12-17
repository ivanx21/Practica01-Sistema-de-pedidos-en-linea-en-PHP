<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Restaurante</title>
<link rel="stylesheet" type="text/css" href="../../../css/hoja.css">
</head>

<body>

<header>
        <nav>
        <ul>
        <li><a href="../controlador/index.php">Inicio</a></li>  
        <li><a href="../cliente/listar_cliente.php">Clientes</a></li>
        <li><a href="../producto/listar_productos.php">Productos</a></li>
        <li><a href="listar_restaurante.php">Restaurantes</a></li>
        <li><a href="../controlador/index.php">Cerrar Sesión</a></li>   
        
      </ul>
        </nav>
    </header>


<?php
include '../../../config/conexionBD.php';
$sql = "SELECT * FROM cliente";
$result = $conn->query($sql);
?>



<section class= "contenedor"> 
<h1>Administrar de Clientes</span></h1>
  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Cédula</td>
      <td class="primera_fila">Nombres</td>
      <td class="primera_fila">Apellidos</td>
      <td class="primera_fila">Dirección</td>
      <td class="primera_fila">Teléfono;</td>
      <td class="primera_fila">Correo</td>
      <td class="primera_fila">Contraseña</td>
    </tr> 
   
   <?php 
      while($row = $result->fetch_assoc()):
        echo "<tr>";
        echo " <td>" . $row["cli_codigo"] . "</td>";
        echo " <td>" . $row["cli_cedula"] . "</td>";
        echo " <td>" . $row["cli_nombre"] . "</td>";
        echo " <td>" . $row["cli_apellido"] . "</td>";
        echo " <td>" . $row["cli_direccion"] . "</td>";
        echo " <td>" . $row["cli_telefono"] . "</td>";
        echo " <td>" . $row["cli_correo"] . "</td>";
        echo " <td>" . $row["cli_clave"] . "</td>";
    //   
    ?>
      <td class="bot"><a href="eliminar_cliente.php?codigo=<?php echo $row["cli_codigo"]?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      
      <td class='bot'><a href="modificar_cliente.php?
      codigo=<?php echo $row["cli_codigo"]?> &
      cedula=<?php echo $row["cli_cedula"]?> &
      nombre=<?php echo $row["cli_nombre"]?> &
      apellido=<?php echo $row["cli_apellido"]?> &
      direccion=<?php echo $row["cli_direccion"]?> &
      telefono=<?php echo $row["cli_telefono"]?> &
      correo=<?php echo $row["cli_correo"]?> &
      correo=<?php echo $row["cli_clave"]?>">
      <input type='button' name='up' id='up' value='Actualizar'></a></td>
      
      <td class="bot">
        <a href="../../../public/vista/registrar_cliente.html">
        <input type='button' name='del' id='del' value='Crear'>
      </a></td>
      </tr>

<?php 
endwhile;
?>	
  </table>
  </section>
</body>
</html>