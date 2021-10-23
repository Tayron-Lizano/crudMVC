<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>


   <form action="?c=insert" method="post">
   <div class="groupform">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="name" placeholder="Enter your name"  required>
   </div>
  <div class="groupform">
      <label for="apellido">Apellido</label>
      <input type="Text" name="apellido" id="apellido" placeholder="Enter your last name" required>
   </div>
   <div class="groupform">
      <label for="edad">Edad</label>
      <input type="number" name="edad" id="edad" placeholder="Enter you age" required>
   </div>
   <div class="groupform">
      <label for="genero">Género</label>
      <input type="text" name="genero" id="genero" placeholder=" F (FEMALE) - M (MALE)" required>
   </div>
   <div class="groupform">
      <label for="departamento">Departamento</label>
      <input type="text" name="departamento" id="departamento" required>
   </div>
   <div class="groupform">
      <label for="sueldo">Sueldo:</label>
      <input type="number" name="sueldo" id="sueldo" required>
   </div>
   <button id="btn-nuevo"  name="btn-nuevo"  type="submit">Insert</button>
</form>


</body>
</html>
