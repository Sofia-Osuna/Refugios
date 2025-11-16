<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio de sesion</title>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">

	<style>

		body{
			font-family: Arial;
		}

		h1{
			text-align: center;
			margin-top: 20px;
		}

		.contenedor-imagen{
			text-align: center;
			margin-top: 20px;
		}

		.contenedor-imagen img{
			width: 150px;
			height: auto;
			border-radius: 10px;
		}

		label{
			text-align: left;
			display: block;
			margin-left: 35%;
			margin-top: 10px;
			font-weight: bold;
		}

		input[type="text"],
		input[type="password"]{
            margin: 0 auto;
            display: block;
            width: 30%;
            padding: 8px;
            border-radius: 15px;
            border: 1px solid #ccc;
        }

        input[type="submit"]{
        	display: block;
        	margin: 20px auto;
        	padding: 10px 20px;
        	border: none;
        	border-radius: 20px;
        	background-color: #FFC107;
        	color: black;
        	font-weight: bold;
        	cursor: pointer;
        	width: 10%;
        }

        input[type="submit"]:hover{
        	background-color: #e0a800;
        }

        h5{
        	text-align: center;
        	margin-top: 30px;
        }

        .registrate{
        	display: block;
        	text-align: center;
        	margin-top: 5px;
        	font-weight: bold;
        	color: #28A745;
        	text-decoration: none;
        	font-size: 18px;
        }

        .registrate:hover{
        	color: #1e7e34;
        }

	</style>

</head>
<body>

<div class="contenedor-imagen">
	<img src="https://img.freepik.com/vector-premium/amor-perro-icono-corazon-dentro-perro-pata-vector-icono_654297-339.jpg?w=1380">
</div>

<h1>¡Bienvenido!</h1>

<label>Nombre de usuario</label>
<input type="text" name="usuario">

<label>Contraseña</label>
<input type="password" name="contraseña">

<input type="submit" value="Iniciar sesion">

<h5>¿No tienes cuenta?</h5>

<a href="#" class="registrate">Regístrate aquí</a>

</body>
</html>
