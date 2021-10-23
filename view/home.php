<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<main>

<table>
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>APELLIDO</th>
		<th>EDAD</th>
		<th>GENERO</th>
		<th>DEPARTAMENTO</th>
		<th>SUELDO</th>
		<th colspan=2 >OPCIONES</th>

</tr>
<?php

foreach($select as $e):  ?>

	<tr>
	<td><?php echo $e["id"]; ?>  </td> 
	<td><?php echo $e["nombre"]; ?></td> 
	<td><?php echo $e["apellido"];?> </td> 
	<td><?php echo $e["edad"];?> </td> 
	<td><?php echo $e["genero"]; ?></td> 
	<td><?php echo $e["departamento"];?></td> 
	<td><?php echo $e["sueldo"]; ?></td> 
	<td> <a href="?c=update&id=<?php echo $e['id']; ?>"> Editar</a> </td> 
	<td> <a href="?c=delete&id=<?php echo $e['id']; ?>"> Borrar</a> </td> 
				
	</tr> <br>
<?php 
endforeach;
?>

</table>

<a href="?c=save">Nuevo</a>



</main>
</body>
</html>

