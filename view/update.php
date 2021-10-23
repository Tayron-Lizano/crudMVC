<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<?php   foreach($row as $e): ?>

<form action="?c=insert&id=<?php echo $row['id'];?>" method="post">
   <div class="groupform">
      <label for="id">Id</label>
			<input type="number" name="id" id="id" value="<?php echo $e['id'];?>" readonly>
	 </div>
	 <div class="groupform">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="name" placeholder="Enter your name"   value="<?php echo $e['nombre'];?>" required>
   </div>
   <div class="groupform">
      <label for="apellido">Apellido</label>
      <input type="Text" name="apellido" id="apellido" placeholder="Enter your last name"  value="<?php echo $e['apellido'];?>" required>
   </div>
   <div class="groupform">
      <label for="edad">Edad</label>
      <input type="number" name="edad" id="edad" placeholder="Enter you age"  value="<?php echo $e['edad'];?>" required>
   </div>
   <div class="groupform">
      <label for="genero">Género</label>
      <input type="text" name="genero" id="genero" placeholder=" F (FEMALE) - M (MALE)"  value="<?php echo $e['genero'];?>" required>
   </div>
   <div class="groupform">
      <label for="departamento">Departamento</label>
      <input type="text" name="departamento" id="departamento"  value="<?php echo $e['departamento'];?>" required>
   </div>
   <div class="groupform">
      <label for="sueldo">Sueldo:</label>
      <input type="number" name="sueldo" id="sueldo"  value="<?php echo $e['sueldo'];?>" required>
   </div>
   <button id="btn-nuevo"  name="btn-nuevo"  type="submit">Update</button>
</form>


<?php   endforeach; ?>

</body>
</html>
