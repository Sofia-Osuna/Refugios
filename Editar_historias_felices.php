<!-- formulario identico a fromulario historia felices, pero de una historia en especifico y pues se añade el boton de eliminar -->
<?php 
include('menu.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style>
		 h2{
    text-align: center;
    }

    form {
    max-width: 600px;
    margin: 0 auto;  
    display: flex;
    flex-direction: column;
    align-items: center;  
    gap: 20px;
}

label {
    text-align: center; 
}

input[type="text"] {
    width: 400px;  
    display: block;
    border-color: black;
}
	</style>
</head>
<body>
<br>
<h2>Editar una historia feliz</h2>
<br>
<form>
	<label>Nombre</label>
	<input style="border-radius: 10px;" type="text" name="">

	<label>Descripcion</label>
	<textarea style="font-size: 30px; border-color: black; border-radius: 10px; resize: none;"></textarea>

	<label>Fotografia de la Mascota</label>
	<input type="file" name="">

	<a href="">
		<button style="border-radius: 10px; border-color: whitesmoke; font-size: 25px; background: #85B79D; color:black;">Actualizar historia</button>
	</a>
</form>

</body>
</html>
<?php 
include('Pie_pagina.php');
 ?>