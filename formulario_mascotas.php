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
	h2 {
    text-align: center;
}

form {
    max-width: 600px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 20px;
}

label {
    text-align: left;
    width: 100%;
    margin-bottom: 5px;
}

input[type="text"],
select {
    width: 400px;
    display: block;
    border: 1px solid black;
    border-radius: 4px;
    padding: 5px;
}


	</style>
</head>
<body>
<br>

<br>
<form>
	<label>Nombre de la mascota</label>
	<input style="border-radius: 10px;" type="text" name="">

	<label>Descripcion</label>
	<textarea style="font-size: 30px; border-color: black; border-radius: 10px; resize: none;"></textarea>

	<label for="selecciona una especie">Seleccione una especie</label>
    <select id="especie" name="especie">
       
    </select>
    <br>

	<a href="">
		<button style="border-radius: 10px; border-color: whitesmoke; font-size: 25px; background: #85B79D; color:black;">Confirmar</button>
	</a>
</form>

</body>
</html>
<?php 
include('Pie_pagina.php');
 ?>