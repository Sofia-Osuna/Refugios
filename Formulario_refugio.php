<!DOCTYPE html>
<<<<<<< Updated upstream
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Refugio</title>
</head>
<body>
    <form action="controladores/Insertar_refugio.php" method="POST" enctype="multipart/form-data">
        <label for="">Nombre del refugio: </label>
        <input class="inp" type="text" name="nombre" id=""><br><br>

        <label for="">descripción del refugio: </label>
        <textarea name="descripcion" id=""></textarea>

        <label for="">Foto: </label>
        <input type="file" name="foto"><br><br>


        <h3>Dirección</h3>

        <label for="">Estado: </label>
        <input class="inp" type="text" name="estado" id=""><br><br>

        <label for="">Municipio: </label>
        <input class="inp" type="text" name="municipio" id=""><br><br>

        <label for="">Nombre de la calle: </label>
        <input class="inp" type="text" name="nombre_calle" id=""><br><br>

        <label for="">Número Interior: </label>
        <input class="inp" type="text" name="numero_interior" id=""><br><br>

        <label for="">Número Exterior: </label>
        <input class="inp" type="text" name="numero_exterior" id=""><br><br>

        <label for="">Codigo Postal: </label>
        <input class="inp" type="text" name="cp" id=""><br><br>

        <input  class="boton" type="submit" name="guardar" id="">
    </form>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario refugio</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">

	<style>
		header{
			background: ;
		}
	</style>
</head>
<body>

<header>
	<h3>Llena este formulario para registrar un nuevo refugio</h3>
</header>

<label>Nombre del refugio:</label>
<input type="text" name="nombre">
<br>

<label>Telefono:</label>
<input type="text" name="numero">
<br>

<label>Correo:</label>
<input type="text" name="correo">
<br>

<label>Foto:</label>
<input type="file" name="foto">
<br><br>

<label>Descripcion:</label>
<textarea></textarea>
<br><br><br>

<h4>Direccion</h4>
<br><br>

<label>Estado:</label>
	<select name="Estado">
		<option value="1">Sinaloa</option>
		<option value="2">Sonora</option>
		<option value="3">Nayarit</option>
		<option value="4">Baja California</option>
		<option value="5">Baja California Sur</option>
		<option value="6">Chihuahua</option>
		<option value="7">Durango</option>
		<option value="8">Coahuila</option>
		<option value="9">Tamaulipas</option>
		<option value="10">Zacatecas</option>
		<option value="11">Veracruz</option>
		<option value="12">San Luis Potosi</option>
		<option value="13">Guerrero</option>
		<option value="14">Jalisco</option>
		<option value="15">Michoacan</option>
		<option value="16">Oaxaca</option>
		<option value="17">Estado de Mexico</option>
		<option value="18">Campeche</option>
		<option value="19">Tabasco</option>
		<option value="20">Yucatan</option>
		<option value="21">Quintana Roo</option>
		<option value="22">Chiapas</option>
		<option value="23">Colima</option>
		<option value="24">Hidalgo</option>
		<option value="25">Guanajuato</option>
		<option value="26">Puebla</option>
		<option value="27">Aguascalientes</option>
		<option value="28">Queretaro</option>
		<option value="29">Tlaxcala</option>
		<option value="30">Morelos</option>
		<option value="31">Nuevo leon</option>
		<option value="32">Ciudad de Mexico</option>
		
	</select>
	<br><br>

	




</body>
</html>